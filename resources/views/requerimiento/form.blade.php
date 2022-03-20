<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
        <label class="" for="id_plan">
                Insumo
            </label>
            <select name="id_insu" id="id_insu" class="form-control" data-placeholder="Insumo" required>
                @foreach($insumo as $item)
                @if($requerimiento->id_insu==$item['id_insu'])
                <option value="{{$item['id_insu']}}" selected>
                    {{$item['nomb_insu']}}</option>
                @else
                <option value="{{$item['id_insu']}}">
                    {{$item['nomb_insu']}}</option>
                @endif
                @endforeach
            </select>
            {!! $errors->first('id_insu', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
        <label class="" for="id_plan">
                Guia
            </label>
            <select name="id_guia" id="id_guia" class="form-control" data-placeholder="Guia" required>
                @foreach($guia as $item)
                @if($requerimiento->id_guia==$item['id_guia'])
                <option value="{{$item['id_guia']}}" selected>
                {{$item['name']}} - {{$item['nomb_plan']}}</option>
                @else
                <option value="{{$item['id_guia']}}">
                {{$item['name']}} - {{$item['nomb_plan']}}</option>
                @endif
                @endforeach
            </select>
            {!! $errors->first('id_guia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_requ') }}
            {{ Form::text('cant_requ', $requerimiento->cant_requ, ['class' => 'form-control' . ($errors->has('cant_requ') ? ' is-invalid' : ''), 'placeholder' => 'Cant Requ']) }}
            {!! $errors->first('cant_requ', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>