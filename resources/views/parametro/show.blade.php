@extends('cliente.layouts.app')

@section('template_title')
    {{ $parametro->name ?? 'Show Parametro' }}
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title">
                    <h4>Panel De Control</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Panel</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item active">{{ __('Parametro') }}</li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="float-end d-none d-sm-block">
                    <a href="{{ route('parametros.index') }}" class="btn btn-success">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
    
<div class="container-fluid">
    <div class="page-content-wrapper">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Parametro</span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Param:</strong>
                            {{ $parametro->id_param }}
                        </div>
                        <div class="form-group">
                            <strong>Id Plan:</strong>
                            {{ $parametro->id_plan }}
                        </div>
                        <div class="form-group">
                            <strong>Id Medi:</strong>
                            {{ $parametro->id_medi }}
                        </div>
                        <div class="form-group">
                            <strong>Cant Param:</strong>
                            {{ $parametro->cant_param }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
