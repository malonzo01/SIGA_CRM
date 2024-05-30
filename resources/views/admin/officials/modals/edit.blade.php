<!-- Modal -->
<div class="modal fade" id="ModalOfficialEditar" tabindex="-1" aria-labelledby="ModalOfficialEditar" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="ModalOfficialEditar">Editar Funcionario <span class="icon-nuevo"></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span id="form_result_edit"></span>
        <div class="border border-primary rounded" style="padding:20px;">
        <form id="form_officials_update" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">
                <div class="col-sm-12 border-bottom">
                    <h4>Rango</h4>
                </div>
              </div>
          <div class="row">
              <div class="col-md-6 col-sm-12 form-group mt-2">
                  <label>Categoria:</label>
                  <select name="category_id" id="category_id_edit" class="form-control" required>
                      <option value="">Seleccione</option>
                      @foreach($categories as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                      @endforeach
                  </select>
                  <input type="hidden" name="id_official" id="id_official">
              </div>

              <div class=" col-md-6 col-sm-12 form-group mt-2">
                  <label>Grado:</label>
                  <div id="grade_div_edit">
                    <select name="grade_id" id="grade_id_edit" class="form-control" required>
                        <option value="">Seleccione</option>
                    </select>
                  </div>
              </div>

               <div class="col-md-6 col-sm-12 form-group mt-2">
                  <label>Cuerpo:</label>
                  <select name="body_id" id="body_id_edit" class="form-control" required>
                      <option value="">Seleccione</option>
                      @foreach($bodies as $b)
                        <option value="{{$b->id}}">{{$b->name}}</option>
                      @endforeach
                  </select>
              </div>

              <div class=" col-md-6 col-sm-12 form-group mt-2" id="body_div_edit">
                
              </div>

              <div class="row mt-4">
                <div class="col-sm-12 border-bottom">
                    <h4>Datos Personales</h4>
                </div>
              </div>

              <div class="col-md-6 col-sm-12 form-group mt-2">
                  <label>Primer Apellido:</label>
                  <input type="text" name="surname" id="surname_edit" class="form-control" required>
              </div>

              <div class="col-md-6 col-sm-12 form-group mt-2">
                  <label>Segundo Apellido:</label>
                  <input type="text" name="second_surname" id="second_surname_edit" class="form-control" required>
              </div>

              <div class="col-md-6 col-sm-12 form-group mt-2">
                  <label>Primer Nombre:</label>
                  <input type="text" name="first_name" id="first_name_edit" class="form-control" required>
              </div>

              <div class="col-md-6 col-sm-12 form-group mt-2">
                  <label>Segundo Nombre:</label>
                  <input type="text" name="second_name" id="second_name_edit" class="form-control" required>
              </div>

              <div class="col-md-6 col-sm-12 form-group mt-2">
                  <label>NUIP:</label>
                  <input type="text" name="identification" id="identification_edit" class="form-control" required>
              </div>

              <div class="col-md-6 col-sm-12 form-group mt-2">
                  <label>Celular:</label>
                  <input type="text" name="phone" id="phone_edit" class="form-control" required>
              </div>

              <div class="col-md-6 col-sm-12 form-group mt-2">
                  <label>Correo Electrónico:</label>
                  <input type="text" name="email" id="email_edit" class="form-control" required>
              </div>

              <div class="col-md-6 col-sm-12 form-group mt-2">
                  <label>F. Nacimiento:</label>
                  <input type="date" name="birth_date" id="birth_date_edit" class="form-control" required>
              </div>

              <div class="row mt-4">
                <div class="col-sm-12 border-bottom">
                    <h4>Domicilio</h4>
                </div>
              </div>

              <div class="col-md-6 col-sm-12 form-group mt-2">
                  <label>País:</label>
                  <select name="country_id" id="country_id_edit" class="form-control" required>
                      <option value="">Seleccione</option>
                      @foreach($countries as $co)
                        <option value="{{$co->id}}">{{$co->name}}</option>
                      @endforeach
                  </select>
              </div>

              <div class=" col-md-6 col-sm-12 form-group mt-2">
                  <label>Departamento:</label>
                  <div id="department_div_edit">
                    <select name="department_id" id="department_id" class="form-control" required>
                        <option value="">Seleccione Departamento</option>
                    </select>
                  </div>
              </div>

               <div class=" col-md-6 col-sm-12 form-group mt-2">
                  <label>Municipio:</label>
                  <div id="municipality_div_edit">
                    <select name="municipality_id" id="municipality_id" class="form-control" required>
                        <option value="">Seleccione Municipio</option>
                    </select>
                  </div>
              </div>

               <div class=" col-md-6 col-sm-12 form-group mt-2">
                  <label>Barrio:</label>
                  <div id="residential_div_edit">
                    <select name="residential_id" id="residential_id" class="form-control" required>
                        <option value="">Seleccione Barrio</option>
                    </select>
                  </div>
              </div>

              <div class="col-sm-12 form-group mt-2">
                  <label>Dirección:</label>
                  <textarea name="address" id="address_edit" class="form-control"></textarea>
              </div>

              <div class="row mt-4">
                <div class="col-sm-12 border-bottom">
                    <h4>Datos del Rango</h4>
                </div>
              </div>

              <div class="col-md-6 col-sm-12 form-group mt-2">
                  <label>Sección:</label>
                  <select name="section_id" id="section_id_edit" class="form-control" required>
                      <option value="">Seleccione Sección</option>
                      @foreach($sections as $s)
                        <option value="{{$s->id}}">{{$s->name}}</option>
                      @endforeach
                  </select>
              </div>

              <div class=" col-md-6 col-sm-12 form-group mt-2">
                  <label>Cargo:</label>
                  <div id="charge_div_edit">
                    <select name="charge_id" id="charge_id" class="form-control" required>
                        <option value="">Seleccione Cargo</option>
                    </select>
                  </div>
              </div>

              <div class="col-sm-12 form-group mt-2">
                    <label>Status:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
              </div>

              <div class="form-group mt-4">
                <label for="image">Foto</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <a href="{{asset('foto_online')}}" target="_blank">Tomar foto</a>
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