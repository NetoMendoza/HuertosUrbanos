<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <label class="" for="tipo-afinidad">
                Tipo afinidad
            </label>
            <select name="id_tipo_afin" id="id_tipo_afin" class="form-control" data-placeholder="Guia" required>
                @foreach($tipo_afinidad as $item)
                @if($afinidad->id_tipo_afin==$item['id_tipo_afin'])
                <option value="{{$item['id_tipo_afin']}}" selected>
                    {{$item['tipo_afin']}}</option>
                @else
                <option value="{{$item['id_tipo_afin']}}">
                    {{$item['tipo_afin']}}</option>
                @endif
                @endforeach
            </select>
            {!! $errors->first('id_tipo_afin', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                <label class="" for="tipo-afinidad">
                    Planta Objetivo
                </label>
                <select name="id_plan" id="id_plan" class="form-control" data-placeholder="Planta 1" required>
                    @foreach($planta as $item)
                    @if($afinidad->id_plan==$item['id_plan'])
                    <option value="{{$item['id_plan']}}" selected>
                        {{$item['nomb_plan']}}</option>
                    @else
                    <option value="{{$item['id_plan']}}">
                        {{$item['nomb_plan']}}</option>
                    @endif
                    @endforeach
                </select>
                
                {!! $errors->first('id_plan', '<div class="invalid-feedback">:message</div>
                </p>') !!}
            </div>
            <div class="form-group">
                <label class="" for="tipo-afinidad">
                    Planta Vecina
                </label>
                <select name="id_plant2" id="id_plant2" class="form-control" data-placeholder="Planta 2" required>
                    @foreach($planta as $item)
                    @if($afinidad->id_plant2==$item['id_plan'])
                    <option value="{{$item['id_plan']}}" selected>
                        {{$item['nomb_plan']}}</option>
                    @else
                    <option value="{{$item['id_plan']}}">
                        {{$item['nomb_plan']}}</option>
                    @endif
                    @endforeach
                </select>
                {!! $errors->first('id_plant2', '<div class="invalid-feedback">:message</div>
                </p>') !!}
            </div>

        </div>
        <div class="box-footer mt-4 mb-2">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>