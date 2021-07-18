<!-- Modal -->
<div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos del Equipo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formulario-equipo" enctype="multipart/form-data">
          <div class="container p-3">

            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="mb-3">
                  <label for="centro_salud" class="form-label">Centro de Salud</label>
                  <select class="form-select" aria-label="centro_salud" name="centro_salud" id="centro_salud" aria-describedby="centro_saludHelp">
                    <option value="San Salvador">San Salvador</option>
                    <option value="San Pablo">San Pablo</option>
                    <option value="San Bartolome">San Bartolome</option>
                    <option value="LAEL">LAEL</option>
                    <option value="Villa Milpa Alta">Villa Milpa Alta</option>
                    <option value="Santa Ana">Santa Ana</option>
                    <option value="San Geronimo">San Geronimo</option>
                    <option value="San Juan Tepenahuac">San Juan Tepenahuac</option>
                    <option value="Gaston Melo">Gaston Melo</option>
                    <option value="UNEME CAPA">UNEME CAPA</option>
                    <option value="Jurisdiccion">Jurisdiccion</option>
                  </select>
                  <div id="centro_saludHelp" class="form-text">Ingrese el centro de salud del equipo...</div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="mb-3">
                  <label for="area" class="form-label">Area</label>
                  <input type="text" class="form-control" name="area" id="area" aria-describedby="areaHelp">
                  <div id="areaHelp" class="form-text">Ingrese el area donde se encuentra el equipo...</div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-12">
                <div class="mb-3">
                  <label for="proveedor" class="form-label">Proveedor de Servicio</label>
                  <select class="form-select" aria-label="proveedor" name="proveedor" id="proveedor" aria-describedby="proveedorHelp">
                    <option value="Telmex">Telmex</option>
                    <option value="SSP">SSP</option>
                  </select>
                  <div id="proveedorHelp" class="form-text">Ingrese el proveedor del dispositivo...</div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="mb-3">
                  <label for="dispositivo" class="form-label">Tipo de Dispositivo</label>
                  <select class="form-select" aria-label="dispositivo" name="dispositivo" id="dispositivo" aria-describedby="dispositivoHelp">
                    <option value="PC">PC</option>
                    <option value="Laptop">Laptop</option>
                  </select>
                  <div id="dispositivoHelp" class="form-text">Ingrese el tipo de dispositivo...</div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="mb-3">
                  <label for="modelo" class="form-label">Modelo</label>
                  <input type="text" class="form-control" name="modelo" id="modelo" aria-describedby="modeloHelp">
                  <div id="modeloHelp" class="form-text">Ingrese el modelo del equipo...</div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="mb-3">
                  <label for="marca" class="form-label">Marca</label>
                  <input type="text" class="form-control" name="marca" id="marca" aria-describedby="marcaHelp">
                  <div id="marcaHelp" class="form-text">Ingrese la marca del dispositivo...</div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="mb-3">
                  <label for="n_serie" class="form-label">Numero de Serie</label>
                  <input type="text" class="form-control" name="n_serie" id="n_serie" aria-describedby="serieHelp">
                  <div id="serieHelp" class="form-text">Ingrese el numero de serie del dispositivo...</div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="mb-3">
                  <label for="teclado" class="form-label">Teclado</label>
                  <input class="form-control" type="text" name="teclado" id="teclado" aria-describedby="tecladoHelp">
                  <div id="tecladoHelp" class="form-text">Ingrese el numero de serie del teclado...</div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="mb-3">
                  <label for="mouse" class="form-label">Mouse</label>
                  <input class="form-control" type="text" name="mouse" id="mouse" aria-describedby="mouseHelp">
                  <div id="mouseHelp" class="form-text">Ingrese el numero de serie del mouse...</div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-12">
                <div class="mb-3">
                  <label for="usuario" class="form-label">Usuario</label>
                  <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="usuarioHelp">
                  <div id="usuarioHelp" class="form-text">Ingrese el usuario del equipo...</div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="mb-3">
                  <label for="ip" class="form-label">IP</label>
                  <input type="text" class="form-control" name="ip" id="ip" aria-describedby="ipHelp">
                  <div id="ipHelp" class="form-text">Ingrese la direccion IP del equipo...</div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="mb-3">
                  <label for="mac" class="form-label">MAC</label>
                  <input type="text" class="form-control" name="mac" id="mac" aria-describedby="macHelp">
                  <div id="macHelp" class="form-text">Ingrese la direccion MAC del equipo...</div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-12 d-flex justify-content-center">
                <div class="form-check form-switch mt-2">
                  <input class="form-check-input" type="checkbox" name="win" id="win" value="Si">
                  <label class="form-check-label" for="win">Licencia Windows</label>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 d-flex justify-content-center">
                <div class="form-check form-switch mt-2">
                  <input class="form-check-input" type="checkbox" name="office" id="office" value="Si">
                  <label class="form-check-label" for="office">Licencia Office</label>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 d-flex justify-content-center">
                <div class="form-check form-switch mt-2">
                  <input class="form-check-input" type="checkbox" name="antivirus" id="antivirus" value="Si">
                  <label class="form-check-label" for="antivirus">Licencia Antivirus</label>
                </div>
              </div>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
            <button id="guardar_equipo" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Guardar</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
