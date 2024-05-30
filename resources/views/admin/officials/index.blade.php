@extends('layouts.dashboard')

@section('content')



    <div class="pagetitle">
      <h1>Funcionarios</h1>
      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Funcionarios</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
            @include('admin.officials.modals.create')
            @include('admin.officials.modals.edit')
            @include('admin.officials.modals.confirm')
            <div class="col-sm-12" id="result_message">

            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="row">
                            <div class="col-md-11 col-sm-12">
                                <h3>Listado de Funcionarios</h3>
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalOfficialCrear" style="padding:5px;">
                                    <i class="bi bi-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class=" table-responsive">
                            <table class="table table-bordered mt-4" id="table" width="100%">
                                <thead>
                                    <th>#</th>
                                    <th>Imagen</th>
                                    <th>NUIP</th>
                                    <th>Funcionario</th>
                                    <th>Celular</th>
                                    <th>Correo electrónico</th>
                                    <th>Dirección</th>
                                    <th>Categoría</th>
                                    <th>Grado</th>
                                    <th>Sección</th>
                                    <th>Cargo</th>
                                    <th>Status</th>
                                    <th>Operaciones</th>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </section>
@endsection

@section('scripts')
<script type="text/javascript">
    var table = $('#table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('funcionarios.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'image', image: 'image'},
            {data: 'identification', name: 'identification'},
            {data: 'full_name', name: 'full_name'},
            {data: 'phone', name: 'phone'},
            {data: 'email', name: 'email'},
            {data: 'address', name: 'address'},
            {data: 'name_category', name: 'name_category'},
            {data: 'name_grade', name: 'name_grade'},
            {data: 'name_section', name: 'name_section'},
            {data: 'name_charge', name: 'name_charge'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        "language": {
                "lengthMenu": "Registros por pagina: _MENU_",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay Registros disponibles",
                "infoFiltered": "(filtrada de _MAX_ registros)",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar",
                "zeroRecords": "No se encontraron registros coincidentes",
                "paginate": {
                    "next": "Anterior",
                    "previous": "Siguiente"
                },
            },           
    });

    $(document).on('change', '#category_id,#category_id_edit', function(){
        var id = $('#category_id').val();
        var id_edit = $('#category_id_edit').val();
        if(id){
            $.ajax({
                url:"categorias/grados/"+ id,
                dataType:"json",
                success:function(html){
                        $('#grade_div').html(html.grades);
                }
            })
        }else{
            $.ajax({
                url:"categorias/grados/"+ id_edit,
                dataType:"json",
                success:function(html){
                        $('#grade_div_edit').html('');
                        $('#grade_div_edit').html(html.grades);
                        console.log(html.grades);
                }
            })
        }

    });

    $(document).on('change', '#body_id,#body_id_edit', function(){
        var id = $('#body_id').val();
        var id_edit = $('#body_id_edit').val();
        if(id){
            $.ajax({
                url:"cuerpos/professions/"+ id,
                dataType:"json",
                success:function(html){
                        $('#body_div').html(html.professions);
                }
            })
        }else{
            $.ajax({
                url:"cuerpos/professions/"+ id_edit,
                dataType:"json",
                success:function(html){
                        $('#body_div_edit').html(html.professions);
                }
            })   
        }
    });

    $(document).on('change', '#country_id,#country_id_edit', function(){
        var id = $('#country_id').val();
        var id_edit = $('#country_id_edit').val();
        if(id){
            $.ajax({
                url:"paises/departamentos/"+ id,
                dataType:"json",
                success:function(html){
                        $('#department_div').html(html.departments);
                }
            })
        }else{
            $.ajax({
                url:"paises/departamentos/"+ id_edit,
                dataType:"json",
                success:function(html){
                        $('#department_div_edit').html(html.departments);
                }
            })   
        }
    });

    $(document).on('change', '#department_id,#department_id_edit', function(){
        var id = $('#department_id').val();
        var id_edit = $('#department_id_edit').val();
        if(id){
            $.ajax({
                url:"departamentos/municipios/"+ id,
                dataType:"json",
                success:function(html){
                        $('#municipality_div').html(html.municipalities);
                }
            })
        }else{
            $.ajax({
                url:"departamentos/municipios/"+ id_edit,
                dataType:"json",
                success:function(html){
                        $('#municipality_div_edit').html(html.municipalities);
                }
            })
        }
    });

    $(document).on('change', '#department_id,#department_id_edit', function(){
        var id = $('#department_id').val();
        var id_edit = $('#department_id_edit').val();
        if(id){
            $.ajax({
                url:"municipios/barrios/"+ id,
                dataType:"json",
                success:function(html){
                        $('#residential_div').html(html.residentials);
                }
            })
        }else{
            $.ajax({
                url:"municipios/barrios/"+ id_edit,
                dataType:"json",
                success:function(html){
                        $('#residential_div_edit').html(html.residentials);
                }
            })
        }
    });

    $(document).on('change', '#section_id,#section_id_edit', function(){
        var id = $('#section_id').val();
        var id_edit = $('#section_id_edit').val();
        if(id){
            $.ajax({
                url:"secciones/cargos/"+ id,
                dataType:"json",
                success:function(html){
                        $('#charge_div').html(html.charges);
                }
            })
        }else{
            $.ajax({
                url:"secciones/cargos/"+ id_edit,
                dataType:"json",
                success:function(html){
                        $('#charge_div_edit').html(html.charges);
                }
            })
        }
    });

    $("#form_officials_post").on("submit", function (event) {
        event.preventDefault();
        $.ajax({
            url: "{{ route('funcionarios.store') }}",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            success: function (data) {
                var html = "";
                if (data.errors) {
                    html = '<div class="alert alert-dismissible alert-danger"><button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
                    for (var count = 0; count < data.errors.length; count++) {
                        html += "<p>" + data.errors[count] + "</p>";
                    }
                    html += "</div>";
                }

                if (data.error) {
                    html = '<div class="alert alert-dismissible alert-danger"><button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
                    html += "<p>" + data.error + "</p>";
                    html += "</div>";
                    $("#form_result").html(html);
                }

                if (data.success) {
                    html = '<div class="alert alert-dismissible alert-success"><button type="button" class="btn-close" data-bs-dismiss="alert"></button>' + data.success + "</div>";
                    $("#form_officials_post")[0].reset();
                    $("#table").DataTable().ajax.reload();
                    $("#ModalOfficialCrear").modal("hide");
                }
                $("#result_message").html(html);
            },
        });
    });

    $(document).on('click', '.edit', function(){
        var id = $(this).attr('id');
        $('#form_result').html('');
        $('#form_result_edit').html('');
            $.ajax({
                url:"funcionarios/"+id+"/edit",
                dataType:"json",
                success:function(html){
                    $('#first_name_edit').val(html.data.first_name);
                    $('#second_name_edit').val(html.data.second_name);
                    $('#surname_edit').val(html.data.surname);
                    $('#second_surname_edit').val(html.data.second_surname);
                    $('#identification_edit').val(html.data.identification);
                    $('#phone_edit').val(html.data.phone);
                    $('#email_edit').val(html.data.email);
                    $('#birth_date_edit').val(html.data.birth_date);
                    $('#status_edit').val(html.data.status);
                    $('#id_official').val(html.data.id);

                    $('#category_id_edit option[value=' + html.data.category_id + ']').attr('selected','selected');
                    $('#body_id_edit option[value=' + html.data.body_id + ']').attr('selected','selected');

                    if(html.data.grade_id){ 
                        $.ajax({
                            url:"categorias/grados_edit/"+ html.data.grade_id,
                            dataType:"json",
                            success:function(html){
                                $('#grade_div_edit').html(html.grades);
                                
                            }
                        })
                    }

                    if(html.data.body_id){ 
                        $.ajax({
                            url:"cuerpos/professions_edit/"+ id,
                            dataType:"json",
                            success:function(html){
                                $('#body_div_edit').html(html.professions);
                            }
                        })
                    }

                    $('#country_id_edit option[value=' + html.data.country_id + ']').attr('selected','selected');

                    if(html.data.department_id){ 
                        $.ajax({
                            url:"paises/departamentos_edit/"+ html.data.department_id,
                            dataType:"json",
                            success:function(html){
                                $('#department_div_edit').html(html.departments);
                            }
                        })
                    }

                    if(html.data.municipality_id){ 
                        $.ajax({
                            url:"departamentos/municipios_edit/"+ html.data.municipality_id,
                            dataType:"json",
                            success:function(html){
                                $('#municipality_div_edit').html(html.municipalities);
                            }
                        })
                    }

                    if(html.data.residential_id){ 
                        $.ajax({
                            url:"municipios/barrios_edit/"+ html.data.residential_id,
                            dataType:"json",
                            success:function(html){
                                $('#residential_div_edit').html(html.residentials);
                            }
                        })
                    }

                    $('#address_edit').val(html.data.address);
                    $('#section_id_edit option[value=' + html.data.section_id + ']').attr('selected','selected');

                    if(html.data.charge_id){ 
                        $.ajax({
                            url:"secciones/cargos_edit/"+ html.data.charge_id,
                            dataType:"json",
                            success:function(html){
                                $('#charge_div_edit').html(html.charges);
                            }
                        })
                    }

                    $('#ModalOfficialEditar').modal('show');
                }
            })
    });

    $("#form_officials_update").on("submit", function (event) {
        event.preventDefault();
        var id = $("#id_official").val();
        $.ajax({
            url: "funcionarios/" + id,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            success: function (data) {
                var html = "";
                if (data.errors) {
                    html = '<div class="alert alert-dismissible alert-danger"><button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
                    for (var count = 0; count < data.errors.length; count++) {
                        html += "<p>" + data.errors[count] + "</p>";
                    }
                    html += "</div>";
                }

                if (data.error) {
                    html = '<div class="alert alert-dismissible alert-danger"><button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
                    html += "<p>" + data.error + "</p>";
                    html += "</div>";
                    $("#form_result_edit").html(html);
                }

                if (data.success) {
                    html = '<div class="alert alert-dismissible alert-success"><button type="button" class="btn-close" data-bs-dismiss="alert"></button>' + data.success + "</div>";
                    $("#ModalOfficialEditar").modal("hide");
                    $("#form_officials_update")[0].reset();
                    $("#table").DataTable().ajax.reload();
                }
                $("#result_message").html(html);
            },
        });
    });

    var official_id;

     $(document).on('click', '.delete', function(){
        official_id = $(this).attr('id');
        $('#confirmModal').modal('show');
     });

     $('#ok_button').click(function(){
        $.ajax({
            url:"funcionarios/destroy/"+official_id,
            beforeSend:function(){
                $('#ok_button').text('Eliminando...');
            },
            success:function(data)
            {
                setTimeout(function(){
                    $('#confirmModal').modal('hide');
                    $('#ok_button').text('Si');
                    $('#table').DataTable().ajax.reload();
                }, 2000);
            }
        });
     });

</script>
@endsection