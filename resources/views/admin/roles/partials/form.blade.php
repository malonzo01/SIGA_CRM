<div class="col-md-4 col-sm-12 mt-4">
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de rol']) !!}

        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<br>
<h2 class="h3">Lista de Permisos</h2>
<div class="row">
    <div >
        @foreach ($permissions as $permission)
            <label class="col-md-4 col-sm-12 mt-4">
                {!! Form::checkbox('permissions[]', $permission->id, null, ['classs' => 'mr-1']) !!}
                {{ $permission->description }}
            </label>
        @endforeach
    </div>
</div>
