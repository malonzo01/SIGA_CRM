@extends('layouts.dashboard')

@section('content')

    <div class="pagetitle">
      <h1>Secciones</h1>
      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item ">Mantenimiento</li>
            <li class="breadcrumb-item active">Secciones</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
            @include('admin.sections.modals.create')
            @include('admin.sections.modals.edit')
            @include('admin.sections.modals.confirm')
            <div class="col-sm-12" id="result_message">

            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="row">
                            <div class="col-md-11 col-sm-12">
                                <h3>Secciones</h3>
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalSeccionCrear" style="padding:5px;" title="Nuevo">
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
                                    <th>Orden</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
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
        ajax: "{{ route('secciones.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'orden', name: 'orden'},
            {data: 'name', name: 'name'},
            {data: 'description', name: 'description'},
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

    $('#form_sections_post').on('submit', function(event){
            event.preventDefault();
           $.ajax({
            url:"{{ route('secciones.store') }}",
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
                $('#form_sections_post')[0].reset();
                $('#table').DataTable().ajax.reload();
                $('#ModalSeccionCrear').modal('hide');
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
               url:"secciones/"+id+"/edit",
               dataType:"json",
               success:function(html){
                $('#orden_edit').val(html.data.orden);
                $('#name_edit').val(html.data.name);
                $('#description_edit').val(html.data.description);
                $('#status_edit').val(html.data.status);
                $('#id_section').val(html.data.id);
                $('#ModalSeccionEditar').modal('show');
               }
              })
        });

        $('#form_sections_update').on('submit', function(event){
            event.preventDefault();
             var id = $('#id_section').val();
             $.ajax({
                url:"secciones/"+id,
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
                  $('#ModalSeccionEditar').modal('hide');
                  $('#form_sections_update')[0].reset();
                  $('#table').DataTable().ajax.reload();
                 }
                 $('#result_message').html(html);
                }
               });
         });


         var section_id;

         $(document).on('click', '.delete', function(){
            section_id = $(this).attr('id');
            $('#confirmModal').modal('show');
         });

         $('#ok_button').click(function(){
            $.ajax({
                url:"secciones/destroy/"+section_id,
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
