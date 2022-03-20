<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_usuario') }}
            {{ Form::text('id_usuario', $cliente->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_clie') }}
            {{ Form::text('id_clie', $cliente->id_clie, ['class' => 'form-control' . ($errors->has('id_clie') ? ' is-invalid' : ''), 'placeholder' => 'Id Clie']) }}
            {!! $errors->first('id_clie', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('esta_clie') }}
            {{ Form::text('esta_clie', $cliente->esta_clie, ['class' => 'form-control' . ($errors->has('esta_clie') ? ' is-invalid' : ''), 'placeholder' => 'Esta Clie']) }}
            {!! $errors->first('esta_clie', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>