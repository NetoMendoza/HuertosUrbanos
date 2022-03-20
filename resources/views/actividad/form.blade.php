<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <label class="" for="id_Guia">
                Guia
            </label>
            <select name="id_guia" id="id_guia" class="form-control" data-placeholder="Guia" required>
                @foreach($guia as $item)
                @if($actividad->id_guia==$item['id_guia'])
                <option value="{{$item['id_guia']}}" selected>
                    {{$item['name']}} - {{$item['nomb_plan']}}</option>
                @else
                <option value="{{$item['id_guia']}}">
                {{$item['name']}} - {{$item['nomb_plan']}}</option>
                @endif
                @endforeach
            </select>
            {!! $errors->first('id_guia', '<div class="invalid-feedback">:message</div>
            </p>') !!}
        </div>
        <div class="form-group">
            <label class="" for="id_tipo_acti">
                tipo Actividad
            </label>
            <select name="id_tipo_acti" id="id_tipo_acti" class="form-control" data-placeholder="tipo actividad" required>
                @foreach($tipo_actividad as $item)
                @if($actividad->id_tipo_acti==$item['id_tipo_acti'])
                <option value="{{$item['id_tipo_acti']}}" selected>
                    {{$item['nomb_tipo_acti']}}</option>
                @else
                <option value="{{$item['id_tipo_acti']}}">
                    {{$item['nomb_tipo_acti']}}</option>
                @endif
                @endforeach
            </select>
            {!! $errors->first('id_tipo_acti', '<div class="invalid-feedback">:message</div>
            </p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre actividad') }}
            {{ Form::text('nomb_acti', $actividad->nomb_acti, ['class' => 'form-control' . ($errors->has('nomb_acti') ? ' is-invalid' : ''), 'placeholder' => 'Nombre De Actividad']) }}
            {!! $errors->first('nomb_acti', '<div class="invalid-feedback">:message</div>
            </p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('desc_acti', $actividad->desc_acti, ['class' => 'form-control' . ($errors->has('desc_acti') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('desc_acti', '<div class="invalid-feedback">:message</div>
            </p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Duración') }}
            {{ Form::text('tiem_acti', $actividad->tiem_acti, ['class' => 'form-control' . ($errors->has('tiem_acti') ? ' is-invalid' : ''), 'placeholder' => 'Duración']) }}
            {!! $errors->first('tiem_acti', '<div class="invalid-feedback">:message</div>
            </p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Prioridad') }}
            <select name="prio_acti" id="prio_acti" class="form-control" data-placeholder="prioridad" required>
            <option value="10">Alta</option>
            <option value="7">Media</option>
            <option value="4">Baja</option>
            <option value="0">Desconocido</option>
            </select>
            {!! $errors->first('prio_acti', '<div class="invalid-feedback">:message</div>
            </p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado de actividad') }}
            {{ Form::text('esta_acti', $actividad->esta_acti, ['class' => 'form-control' . ($errors->has('esta_acti') ? ' is-invalid' : ''), 'placeholder' => 'Estado Actividad']) }}
            {!! $errors->first('esta_acti', '<div class="invalid-feedback">:message</div>
            </p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>