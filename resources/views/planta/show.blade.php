@extends('cliente.layouts.app')

@section('template_title')
    {{ $planta->name ?? 'Show Planta' }}
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
                        <li class="breadcrumb-item active">{{ __('Planta') }}</li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="float-end d-none d-sm-block">
                    <a href="{{ route('plantas.index') }}" class="btn btn-success">Regresar</a>
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
                            <span class="card-title">Mostrar Planta</span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Planta:</strong>
                            {{ $planta->id_plan }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo Planta:</strong>
                            {{ $planta->id_tipo_plan }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Planta:</strong>
                            {{ $planta->nomb_plan }}
                        </div>
                        <div class="form-group">
                            <strong>Variedad Planta:</strong>
                            {{ $planta->vari_plan }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción Planta:</strong>
                            {{ $planta->desc_plan }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
