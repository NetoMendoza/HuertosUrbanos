<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_expe') }}
            {{ Form::text('id_expe', $experto->id_expe, ['class' => 'form-control' . ($errors->has('id_expe') ? ' is-invalid' : ''), 'placeholder' => 'Id Expe']) }}
            {!! $errors->first('id_expe', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_usuario') }}
            {{ Form::text('id_usuario', $experto->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('esta_expe') }}
            {{ Form::text('esta_expe', $experto->esta_expe, ['class' => 'form-control' . ($errors->has('esta_expe') ? ' is-invalid' : ''), 'placeholder' => 'Esta Expe']) }}
            {!! $errors->first('esta_expe', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>