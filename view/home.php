<div class="container">
    <div class="row">
        <div class="col-8 offset-2 d-grid mb-5">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Nuevo Equipo
            </button>
        </div>

        <?php
            include_once 'view/includes/modal.php';
        ?>

    </div>
</div>

<div class="container tabla">
    <div class="row">
        <div class="col-12">
            <table id="tabla-equipos" class="table table-dark table-striped table-hover table-bordered table-sm table-responsive-sm shadow-lg">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">C. Salud</th>
                        <th scope="col">Area</th>
                        <th scope="col">P. Servicio</th>
                        <th scope="col">T. Dispositivo</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">N. Serie</th>
                        <th scope="col">Teclado</th>
                        <th scope="col">Mouse</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">IP</th>
                        <th scope="col">MAC</th>
                        <th scope="col">Windows</th>
                        <th scope="col">Office</th>
                        <th scope="col">Antivirus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>