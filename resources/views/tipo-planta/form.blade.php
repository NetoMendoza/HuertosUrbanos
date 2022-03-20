<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo de planta') }}
            {{ Form::text('tipo_plan', $tipoPlanta->tipo_plan, ['class' => 'form-control' . ($errors->has('tipo_plan') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Planta']) }}
            {!! $errors->first('tipo_plan', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>