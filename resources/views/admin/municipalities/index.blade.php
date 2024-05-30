@extends('layouts.dashboard')

@section('content')

    <div class="pagetitle">
      <h1>Municipios</h1>
      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item ">Direcciones</li>
            <li class="breadcrumb-item active">Municipios</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
            @include('admin.municipalities.modals.create')
            @include('admin.municipalities.modals.edit')
            @include('admin.municipalities.modals.confirm')
            <div class="col-sm-12" id="result_message">

            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="row">
                            <div class="col-md-11 col-sm-12">
                                <h3>Listado de Municipios</h3>
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalMunicipalityCrear" style="padding:5px;">
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
                                    <th>País</th>
                                    <th>Departamento</th>
                                    <th>Municipio</th>
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
<script>
    var table = $('#table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('municipios.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'country_name', name: 'country_name'},
            {data: 'department_name', name: 'department_name'},
            {data: 'name', name: 'name'},
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

    $('#form_municipalities_post').on('submit', function(event){
            event.preventDefault();
           $.ajax({
            url:"{{ route('municipios.store') }}",
            method:"POST",
            data: new FormData(this),
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            success:function(data)
            {
             var html = '';
             if(data.errors)
             {
              html = '<div class="alert alert-dismissible alert-danger"><button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
              for(var count = 0; count < data.errors.length; count++)
              {
                    html += '<p>' + data.errors[count] + '</p>';
              }
                html += '</div>';
             }

            if(data.error)
            {
                html = '<div class="alert alert-dismissible alert-danger"><button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
                html += '<p>' + data.error + '</p>';
                html += '</div>';
                $('#form_result').html(html);
            }

             if(data.success)
             {
                html = '<div class="alert alert-dismissible alert-success"><button type="button" class="btn-close" data-bs-dismiss="alert"></button>' + data.success + '</div>';
                $('#form_municipalities_post')[0].reset();
                $('#table').DataTable().ajax.reload();
                $('#ModalMunicipalityCrear').modal('hide');
             }
                $('#result_message').html(html);
            }
            });
        
        });

        $(document).on('click', '.edit', function(){
              var id = $(this).attr('id');
              $('#form_result').html('');
              $('#form_result_edit').html('');
              $.ajax({
               url:"municipios/"+id+"/edit",
               dataType:"json",
               success:function(html){
                $('#department_edit option[value=' + html.data.department_id + ']').attr('selected','selected');
                $('#name_edit').val(html.data.name);
                $('#status_edit').val(html.data.status);
                $('#id_municipality').val(html.data.id);
                $('#ModalMunicipalityEditar').modal('show');
               }
              })
        });

        $('#form_municipalities_update').on('submit', function(event){
            event.preventDefault();
             var id = $('#id_municipality').val();
             $.ajax({
                url:"municipios/"+id,
                method:"POST",
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType:"json",
                success:function(data)
                {
                 var html = '';
                 if(data.errors)
                 {
                  html = '<div class="alert alert-dismissible alert-danger"><button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
                  for(var count = 0; count < data.errors.length; count++)
                  {
                   html += '<p>' + data.errors[count] + '</p>';
                  }
                  html += '</div>';
                 }

                if(data.error)
                {
                    html = '<div class="alert alert-dismissible alert-danger"><button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
                    html += '<p>' + data.error + '</p>';
                    html += '</div>';
                    $('#form_result').html(html);
                }

                 if(data.success)
                 {
                  html = '<div class="alert alert-dismissible alert-success"><button type="button" class="btn-close" data-bs-dismiss="alert"></button>' + data.success + '</div>';
                  $('#ModalMunicipalityEditar').modal('hide');
                  $('#form_municipalities_update')[0].reset();
                  $('#table').DataTable().ajax.reload();
                 }
                 $('#result_message').html(html);
                }
               });
         });


         var municipality_id;

         $(document).on('click', '.delete', function(){
            municipality_id = $(this).attr('id');
            $('#confirmModal').modal('show');
         });

         $('#ok_button').click(function(){
            $.ajax({
                url:"municipios/destroy/"+municipality_id,
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