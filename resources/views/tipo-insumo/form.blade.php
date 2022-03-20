<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo de insumo') }}
            {{ Form::text('nomb_tipo_insu', $tipoInsumo->nomb_tipo_insu, ['class' => 'form-control' . ($errors->has('nomb_tipo_insu') ? ' is-invalid' : ''), 'placeholder' => 'Tipo  De Insumo']) }}
            {!! $errors->first('nomb_tipo_insu', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>