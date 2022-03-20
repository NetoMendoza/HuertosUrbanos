<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('tipo afinidad') }}
            {{ Form::text('tipo_afin', $tipoAfinidad->tipo_afin, ['class' => 'form-control' . ($errors->has('tipo_afin') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Afinidad']) }}
            {!! $errors->first('tipo_afin', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>