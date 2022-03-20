<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_usuario') }}
            {{ Form::text('id_usuario', $proveedor->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_prov') }}
            {{ Form::text('id_prov', $proveedor->id_prov, ['class' => 'form-control' . ($errors->has('id_prov') ? ' is-invalid' : ''), 'placeholder' => 'Id Prov']) }}
            {!! $errors->first('id_prov', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('esta_prov') }}
            {{ Form::text('esta_prov', $proveedor->esta_prov, ['class' => 'form-control' . ($errors->has('esta_prov') ? ' is-invalid' : ''), 'placeholder' => 'Esta Prov']) }}
            {!! $errors->first('esta_prov', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>