@extends('cliente.layouts.app')

@section('template_title')
    Insumo
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
                    <a href="{{ route('insumos.create') }}" class="btn btn-success">Agregar Nuevo</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->



    <div class="container-fluid">

    <div class="page-content-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    
                    @include('cliente.layouts.messages.notifications')
                    @yield('notes')


                    <div class="card-body">
                        
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                    
										<th>Tipo Insumo</th>
										<th>Nombre</th>
										<th>Marca</th>
										<th>Descripción</th>
										<th>Imagen</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($insumos as $insumo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $insumo->nomb_tipo_insu }}</td>
											<td>{{ $insumo->nomb_insu }}</td>
											<td>{{ $insumo->marc_insu }}</td>
											<td>{{ $insumo->desc_insu }}</td>
											<td>{{ $insumo->imag_insu }}</td>

                                            <td>
                                                <form action="{{ route('insumos.destroy',$insumo->id_insu) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('insumos.show',$insumo->id_insu) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('insumos.edit',$insumo->id_insu) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                            <a type="submit" class="btn btn-danger btn-sm borrame" href="#" id="sa-warnings"><i class="fa fa-fw fa-trash"></i> Borrar</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        
                    </div>
                </div>
                {!! $insumos->links() !!}
            </div>
        </div>
     </div><!-- end-Wrapper -->

</div> <!-- container-fluid -->
@endsection
