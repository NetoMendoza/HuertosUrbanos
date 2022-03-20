<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <label class="" for="id_tipo_plan">
                tipo planta
            </label>
            <select name="id_tipo_plan" id="id_tipo_plan" class="form-control" data-placeholder="tipo planta" required>
                @foreach($tipo_planta as $item)
                @if($planta->id_tipo_plan==$item['id_tipo_plan'])
                <option value="{{$item['id_tipo_plan']}}" selected>
                    {{$item['tipo_plan']}}</option>
                @else
                <option value="{{$item['id_tipo_plan']}}">
                    {{$item['tipo_plan']}}</option>
                @endif
                @endforeach
            </select>
            {!! $errors->first('id_tipo_plan', '<div class="invalid-feedback">:message</div>
            </p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre planta') }}
            {{ Form::text('nomb_plan', $planta->nomb_plan, ['class' => 'form-control' . ($errors->has('nomb_plan') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Planta']) }}
            {!! $errors->first('nomb_plan', '<div class="invalid-feedback">:message</div>
            </p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('variedad') }}
            {{ Form::text('vari_plan', $planta->vari_plan, ['class' => 'form-control' . ($errors->has('vari_plan') ? ' is-invalid' : ''), 'placeholder' => 'Variedad  Planta']) }}
            {!! $errors->first('vari_plan', '<div class="invalid-feedback">:message</div>
            </p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::textarea('desc_plan',$planta->desc_plan,['class'=>'form-control', 'rows' => 2, 'cols' => 40]) }}
            
            {!! $errors->first('desc_plan', '<div class="invalid-feedback">:message</div>
            </p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>