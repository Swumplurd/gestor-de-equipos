<script>
    $(document).ready(() => {
        $( '#formulario-equipo' ).submit( function( e ) {
            $.ajax( {
                url: 'control/c-formulario-equipo.php',
                type: 'POST',
                data: new FormData( this ),
                processData: false,
                contentType: false,
                success: respuesta => {
                    console.log(respuesta)
                }
            });
            e.preventDefault();
        });
    });
</script>