@extends('layouts.dashboard')

@section('content')

    <div class="pagetitle">
      <h1>Logistico</h1>
      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item ">Mantenimiento</li>
            <li class="breadcrumb-item active">Logistico</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
            @include('admin.logistic.modals.create')
            @include('admin.logistic.modals.edit')
            @include('admin.logistic.modals.confirm')
            <div class="col-sm-12" id="result_message">

            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="row">
                            <div class="col-md-11 col-sm-12">
                                <h3>Listado de Logistico</h3>
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalLogisticoCrear" style="padding:5px;" title="Nuevo">
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
        ajax: "{{ route('logistico.index') }}",
        columns: [
            {data: 'id', name: 'id'},
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

    $('#form_logistics_post').on('submit', function(event){
            event.preventDefault();
           $.ajax({
            url:"{{ route('logistico.store') }}",
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
                $('#form_logistics_post')[0].reset();
                $('#table').DataTable().ajax.reload();
                $('#ModalLogisticoCrear').modal('hide');
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
               url:"logistico/"+id+"/edit",
               dataType:"json",
               success:function(html){
                $('#name_edit').val(html.data.name);
                $('#description_edit').val(html.data.description);
                $('#status_edit').val(html.data.status);
                $('#id_logistic').val(html.data.id);
                $('#ModalLogisticoEditar').modal('show');
               }
              })
        });

        $('#form_logistics_update').on('submit', function(event){
            event.preventDefault();
             var id = $('#id_logistic').val();
             $.ajax({
                url:"logistico/"+id,
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
                  $('#ModalLogisticoEditar').modal('hide');
                  $('#form_logistics_update')[0].reset();
                  $('#table').DataTable().ajax.reload();
                 }
                 $('#result_message').html(html);
                }
               });
         });


         var logistic_id;

         $(document).on('click', '.delete', function(){
            logistic_id = $(this).attr('id');
            $('#confirmModal').modal('show');
         });

         $('#ok_button').click(function(){
            $.ajax({
                url:"logistico/destroy/"+logistic_id,
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
