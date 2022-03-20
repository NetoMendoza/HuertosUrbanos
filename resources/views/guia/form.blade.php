<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            <label class="" for="id_plan">
                tipo planta
            </label>
            <select name="id_plan" id="id_plan" class="form-control" data-placeholder="planta" required>
                @foreach($planta as $item)
                @if($guia->id_plan==$item['id_plan'])
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
            <div class="form-group">
                <label class="" for="id_expe">
                    Experto
                </label>
                <select name="id_expe" id="id_expe" class="form-control" data-placeholder="experto" required>
                    @foreach($experto as $item)
                    @if($guia->id_expe==$item['id_expe'])
                    <option value="{{$item['id_expe']}}" selected>
                        {{$item['name']}}</option>
                    @else
                    <option value="{{$item['id_expe']}}">
                        {{$item['name']}}</option>
                    @endif
                    @endforeach
                </select>
                {!! $errors->first('id_expe', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('descripción') }}
                    {{ Form::text('desc_guia', $guia->desc_guia, ['class' => 'form-control' . ($errors->has('desc_guia') ? ' is-invalid' : ''), 'placeholder' => 'Descripción Guia']) }}
                    {!! $errors->first('desc_guia', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('estado guia') }}
                        {{ Form::text('esta_guia', $guia->esta_guia, ['class' => 'form-control' . ($errors->has('esta_guia') ? ' is-invalid' : ''), 'placeholder' => 'Estado Guia']) }}
                        {!! $errors->first('esta_guia', '<div class="invalid-feedback">:message</p>') !!}
                        </div>

                    </div>
                    <div class="box-footer mt-4 mb-2">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>