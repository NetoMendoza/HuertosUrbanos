<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
        <label class="" for="id_plan">
                Guia
            </label>
            <select name="id_guia" id="id_guia" class="form-control" data-placeholder="Guia" required>
                @foreach($guia as $item)
                @if($huerto->id_guia==$item['id_guia'])
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
        <label class="" for="id_plan">
                Proyecto
            </label>
            <select name="id_proy" id="id_proy" class="form-control" data-placeholder="proyecto" required>
                @foreach($proyecto as $item)
                @if($huerto->id_proy==$item['id_proy'])
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
        <label class="" for="id_plan">
                planta
            </label>
            <select name="id_plan" id="id_plan" class="form-control" data-placeholder="planta" required>
                @foreach($planta as $item)
                @if($huerto->id_plan==$item['id_plan'])
                <option value="{{$item['id_plan']}}" selected>
                    {{$item['nomb_plan']}}</option>
                @else
                <option value="{{$item['id_plan']}}">
                    {{$item['nomb_plan']}}</option>
                @endif
                @endforeach
            </select>
            {!! $errors->first('id_plan', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>