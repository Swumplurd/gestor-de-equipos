<?php
    require_once '../app/conexion.php';

    mkdir('../archivos/fotos-perifericos/' . $_POST['centro_salud'] . '/' . $_POST['n_serie'] . '/', 0777, true);
    $direccion_guardar = '../archivos/fotos-perifericos/' . $_POST['centro_salud'] . '/' . $_POST['n_serie'] . '/';

    $direccion_archivo = $direccion_guardar . basename($_FILES['teclado']['name']);
    $direccion_teclado_bd = 'archivos/fotos-perifericos/' . $_POST['centro_salud'] . '/' . $_POST['n_serie'] . '/' . basename($_FILES['teclado']['name']);
    move_uploaded_file($_FILES['teclado']['tmp_name'], $direccion_archivo);

    $direccion_archivo = $direccion_guardar . basename($_FILES['mouse']['name']);
    $direccion_mouse_bd = 'archivos/fotos-perifericos/' . $_POST['centro_salud'] . '/' . $_POST['n_serie'] . '/' . basename($_FILES['mouse']['name']);
    move_uploaded_file($_FILES['mouse']['tmp_name'], $direccion_archivo);

    /* === */
    
    $sql = "INSERT INTO t_equipos(centro_salud, area, proveedor, dispositivo, modelo, marca, n_serie, teclado, mouse, usuario, ip, mac, win, office, antivirus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $query = $conexion->prepare($sql);
    $query->bind_param('sssssssssssssss', 
        $_POST['centro_salud'],
        $_POST['area'],
        $_POST['proveedor'],
        $_POST['dispositivo'],
        $_POST['modelo'],
        $_POST['marca'],
        $_POST['n_serie'],
        $direccion_archivo,
        $direccion_archivo,
        $_POST['usuario'],
        $_POST['ip'],
        $_POST['mac'],
        $_POST['win'],
        $_POST['office'],
        $_POST['antivirus']
    );
    $query_ejecutado = $query->execute();
    echo $query_ejecutado;
    $conexion->close();
?>