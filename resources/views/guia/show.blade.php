@extends('cliente.layouts.app')

@section('template_title')
    {{ $guia->name ?? 'Show Guia' }}
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
                        <li class="breadcrumb-item active">{{ __('Guia') }}</li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="float-end d-none d-sm-block">
                    <a href="{{ route('guias.index') }}" class="btn btn-success">Regresar</a>
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
                            <span class="card-title">Mostrar Guia</span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Guia:</strong>
                            {{ $guia->id_guia }}
                        </div>
                        <div class="form-group">
                            <strong>Id Plan:</strong>
                            {{ $guia->id_plan }}
                        </div>
                        <div class="form-group">
                            <strong>Id Expe:</strong>
                            {{ $guia->id_expe }}
                        </div>
                        <div class="form-group">
                            <strong>Desc Guia:</strong>
                            {{ $guia->desc_guia }}
                        </div>
                        <div class="form-group">
                            <strong>Esta Guia:</strong>
                            {{ $guia->esta_guia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
