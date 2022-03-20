<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre medida') }}
            {{ Form::text('nomb_medi', $medida->nomb_medi, ['class' => 'form-control' . ($errors->has('nomb_medi') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Medida']) }}
            {!! $errors->first('nomb_medi', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('desc_medi', $medida->desc_medi, ['class' => 'form-control' . ($errors->has('desc_medi') ? ' is-invalid' : ''), 'placeholder' => 'Descripción de Medida']) }}
            {!! $errors->first('desc_medi', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unidad medición') }}
            {{ Form::text('unid_medi', $medida->unid_medi, ['class' => 'form-control' . ($errors->has('unid_medi') ? ' is-invalid' : ''), 'placeholder' => 'Unidad Medición']) }}
            {!! $errors->first('unid_medi', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>