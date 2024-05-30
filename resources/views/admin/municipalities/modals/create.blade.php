<!-- Modal -->
<div class="modal fade" id="ModalMunicipalityCrear" tabindex="-1" aria-labelledby="ModalSeccionCrear" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="ModalMunicipalityCrear">Nuevo Municipio <span class="icon-nuevo"></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span id="form_result"></span>
        <div class="border border-primary rounded" style="padding:20px;">
        <form id="form_municipalities_post" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">

              <div class="col-sm-12 form-group mt-2">
                  <label>Departamento:</label>
                  <select name="department_id" id="department_id" class="form-control">
                    @foreach($deps as $dep)
                      <option value="{{ $dep->id }}">
                            {{ $dep->name }}
                      </option>
                    @endforeach
                  </select>
              </div>

              <div class="col-sm-12 form-group mt-2">
                  <label>Nombre:</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Ej: VENEZUELA	"  onkeyup="mayus(this);" maxlength="50">
              </div>

              <div class="col-sm-12 form-group mt-2">
                    <label>Status:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Guardar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
         </form>
       </div>
      </div>
    </div>
  </div>
</div>