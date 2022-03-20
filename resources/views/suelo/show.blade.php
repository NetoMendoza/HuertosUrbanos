@extends('cliente.layouts.app')

@section('template_title')
    {{ $suelo->name ?? 'Show Suelo' }}
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
                        <li class="breadcrumb-item active">{{ __('Suelo') }}</li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="float-end d-none d-sm-block">
                    <a href="{{ route('suelos.index') }}" class="btn btn-success">Regresar</a>
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
                            <span class="card-title">Mostrar Suelo</span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Suel:</strong>
                            {{ $suelo->id_suel }}
                        </div>
                        <div class="form-group">
                            <strong>Id Proy:</strong>
                            {{ $suelo->id_proy }}
                        </div>
                        <div class="form-group">
                            <strong>Anch Suel:</strong>
                            {{ $suelo->anch_suel }}
                        </div>
                        <div class="form-group">
                            <strong>Larg Suel:</strong>
                            {{ $suelo->larg_suel }}
                        </div>
                        <div class="form-group">
                            <strong>Hume Suel:</strong>
                            {{ $suelo->hume_suel }}
                        </div>
                        <div class="form-group">
                            <strong>Ph Suel:</strong>
                            {{ $suelo->ph_suel }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
