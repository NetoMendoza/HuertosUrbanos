<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('nombre tipo actividad') }}
            {{ Form::text('nomb_tipo_acti', $tipoActividad->nomb_tipo_acti, ['class' => 'form-control' . ($errors->has('nomb_tipo_acti') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Actividad']) }}
            {!! $errors->first('nomb_tipo_acti', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>