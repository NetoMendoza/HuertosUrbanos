<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
        <label class="" for="id_plan">
                Tipo De Insumo
            </label>
            <select name="id_tipo_insu" id="id_tipo_insu" class="form-control" data-placeholder="planta" required>
                @foreach($tipo_insumo as $item)
                @if($insumo->id_tipo_insu==$item['id_tipo_insu'])
                <option value="{{$item['id_tipo_insu']}}" selected>
                    {{$item['nomb_tipo_insu']}}</option>
                @else
                <option value="{{$item['id_tipo_insu']}}">
                    {{$item['nomb_tipo_insu']}}</option>
                @endif
                @endforeach
            </select>
            {!! $errors->first('id_tipo_insu', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_insumo') }}
            {{ Form::text('nomb_insu', $insumo->nomb_insu, ['class' => 'form-control' . ($errors->has('nomb_insu') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Insumo']) }}
            {!! $errors->first('nomb_insu', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca_insumo') }}
            {{ Form::text('marc_insu', $insumo->marc_insu, ['class' => 'form-control' . ($errors->has('marc_insu') ? ' is-invalid' : ''), 'placeholder' => 'Marca Insumo']) }}
            {!! $errors->first('marc_insu', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción_insumo') }}
            {{ Form::text('desc_insu', $insumo->desc_insu, ['class' => 'form-control' . ($errors->has('desc_insu') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Insumo']) }}
            {!! $errors->first('desc_insu', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen_insumo') }}
            {{ Form::text('imag_insu', $insumo->imag_insu, ['class' => 'form-control' . ($errors->has('imag_insu') ? ' is-invalid' : ''), 'placeholder' => 'Imagen Insumo']) }}
            {!! $errors->first('imag_insu', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>