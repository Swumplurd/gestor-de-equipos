<?php
    require_once '../app/conexion.php';

    if($_POST['win'] == null) {
        $_POST['win'] = 'No'; // Imprimes o haces tu lógica ;)
    }

    if($_POST['office'] == null) {
        $_POST['office'] = 'No';
    }

    if($_POST['antivirus'] == null) {
        $_POST['antivirus'] = 'No';
    }
    
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
        $_POST['teclado'],
        $_POST['mouse'],
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