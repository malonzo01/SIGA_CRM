<!-- Modal -->
<div class="modal fade" id="ModalCategoryEditar" tabindex="-1" aria-labelledby="ModalSeccionCrear" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="ModalCategoryEditar">Editar Categoria <span class="icon-nuevo"></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span id="form_result_edit"></span>
        <div class="border border-primary rounded" style="padding:20px;">
        <form id="form_categories_update" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">

              <div class="col-sm-12 form-group mt-2">
                  <label>Orden:</label>
                  <input type="text" name="orn_cat" id="orn_cat_edit" class="form-control" placeholder="Ej: 1.00"  onkeyup="mayus(this);" maxlength="5">
              </div>

              <div class="col-sm-12 form-group mt-2">
                  <label>Nombre:</label>
                  <input type="text" name="name" id="name_edit" class="form-control" placeholder="Ej: CIVIL	"  onkeyup="mayus(this);" maxlength="50">
              </div>

              <div class="col-sm-12 form-group mt-2">
                  <label>Descripción:</label>
                  <input type="text" name="description" id="description_edit" class="form-control" placeholder="Ej: PERSONAL NO UNIFORMADO	"  onkeyup="mayus(this);" onkeypress="return validar_string_direccion(event);" maxlength="100">
                  <input type="hidden" name="id_category" id="id_category">
                </div>

              <div class="col-sm-12 form-group mt-2">
                    <label>Status:</label>
                    <select name="status" id="status_edit" class="form-control">
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