<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
        <label class="" for="id_plan">
                planta
            </label>
            <select name="id_plan" id="id_plan" class="form-control" data-placeholder="planta" required>
                @foreach($planta as $item)
                @if($parametro->id_plan==$item['id_plan'])
                <option value="{{$item['id_plan']}}" selected>
                    {{$item['nomb_plan']}}</option>
                @else
                <option value="{{$item['id_plan']}}">
                    {{$item['nomb_plan']}}</option>
                @endif
                
                @endphp
                @endforeach
            </select>
            {!! $errors->first('id_plan', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
        <label class="" for="id_medi">
                Parametro Medición
            </label>
            <select name="id_medi" id="id_medi" class="form-control" data-placeholder="medida" required>
                @foreach($medida as $item)
                @if($parametro->id_medi==$item['id_medi'])
                <option value="{{$item['id_medi']}}" selected>
                    {{$item['nomb_medi']}}</option>
                @else
                <option value="{{$item['id_medi']}}">
                    {{$item['nomb_medi']}}</option>
                @endif
                @endforeach
            </select>
            {!! $errors->first('id_medi', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad necesaria') }}
            {{ Form::text('cant_param', $parametro->cant_param, ['class' => 'form-control' . ($errors->has('cant_param') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad o valor']) }}
            {!! $errors->first('cant_param', '<div class="invalid-feedback">:message</p>') !!}
            
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>