<div class="box box-info padding-1">
    <div class="box-body">
        
    
        <div class="form-group">
        <label class="" for="id_proy">
                proyecto
            </label>
            <select name="id_proy" id="id_proy" class="form-control" data-placeholder="proyecto" required>
                @foreach($proyecto as $item)
                @if($suelo->id_proy==$item['id_proy'])
                <option value="{{$item['id_proy']}}" selected>
                    {{$item['nomb_proy']}}</option>
                @else
                <option value="{{$item['id_proy']}}">
                    {{$item['nomb_proy']}}</option>
                @endif
                @endforeach
            </select>
            {!! $errors->first('id_Proy', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anchura') }}
            {{ Form::text('anch_suel', $suelo->anch_suel, ['class' => 'form-control' . ($errors->has('anch_suel') ? ' is-invalid' : ''), 'placeholder' => 'Ancho del área']) }}
            {!! $errors->first('anch_suel', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('longitud') }}
            {{ Form::text('larg_suel', $suelo->larg_suel, ['class' => 'form-control' . ($errors->has('larg_suel') ? ' is-invalid' : ''), 'placeholder' => 'longitud del área']) }}
            {!! $errors->first('larg_suel', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('humedad') }}
            {{ Form::text('hume_suel', $suelo->hume_suel, ['class' => 'form-control' . ($errors->has('hume_suel') ? ' is-invalid' : ''), 'placeholder' => 'Humedad']) }}
            {!! $errors->first('hume_suel', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ph del suelo') }}
            {{ Form::text('ph_suel', $suelo->ph_suel, ['class' => 'form-control' . ($errors->has('ph_suel') ? ' is-invalid' : ''), 'placeholder' => 'Ph Suelo']) }}
            {!! $errors->first('ph_suel', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>