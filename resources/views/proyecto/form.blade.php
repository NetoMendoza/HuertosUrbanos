<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
        <label class="" for="id_plan">
                Nombre Productor
            </label>
            <select name="id_clie" id="id_clie" class="form-control" data-placeholder="planta" required>
                @foreach($cliente as $item)
                @if($proyecto->id_clie==$item['id_clie'])
                <option value="{{$item['id_clie']}}" selected>
                    {{$item['name']}}</option>
                @else
                <option value="{{$item['id_clie']}}">
                    {{$item['name']}}</option>
                @endif
                @endforeach
            </select>
            {!! $errors->first('id_clie', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre proyecto') }}
            {{ Form::text('nomb_proy', $proyecto->nomb_proy, ['class' => 'form-control' . ($errors->has('nomb_proy') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Proyecto']) }}
            {!! $errors->first('nomb_proy', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('esta_proy', $proyecto->esta_proy, ['class' => 'form-control' . ($errors->has('esta_proy') ? ' is-invalid' : ''), 'placeholder' => 'Estado Proyecto']) }}
            {!! $errors->first('esta_proy', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>