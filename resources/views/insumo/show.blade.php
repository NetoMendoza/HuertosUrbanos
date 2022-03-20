@extends('cliente.layouts.app')

@section('template_title')
    {{ $insumo->name ?? 'Show Insumo' }}
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
                        <li class="breadcrumb-item active">{{ __('Insumo') }}</li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="float-end d-none d-sm-block">
                    <a href="{{ route('insumos.index') }}" class="btn btn-success">Regresar</a>
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
                            <span class="card-title">Mostrar Insumo</span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Insu:</strong>
                            {{ $insumo->id_insu }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo Insu:</strong>
                            {{ $insumo->id_tipo_insu }}
                        </div>
                        <div class="form-group">
                            <strong>Nomb Insu:</strong>
                            {{ $insumo->nomb_insu }}
                        </div>
                        <div class="form-group">
                            <strong>Marc Insu:</strong>
                            {{ $insumo->marc_insu }}
                        </div>
                        <div class="form-group">
                            <strong>Desc Insu:</strong>
                            {{ $insumo->desc_insu }}
                        </div>
                        <div class="form-group">
                            <strong>Imag Insu:</strong>
                            {{ $insumo->imag_insu }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
