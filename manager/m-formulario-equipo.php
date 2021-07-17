<script>
    $(document).ready(() => {
        $('#guardar_equipo').click(() => {
            $.ajax({
                url: "control/c-formulario-equipo.php",
                data: $('#formulario-equipo').serialize(),
                type: "post",
                success: (respuesta) => {
                    console.log(respuesta)
                }
            });
            
        });
    });
</script>