@section('sidebar-left')
<!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

     <div data-simplebar class="h-100">


         <div class="user-sidebar text-center">
             <div class="dropdown">
                 <div class="user-img">
                     <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle">
                     <span class="avatar-online bg-success"></span>
                 </div>
                 <div class="user-info">
                     <h5 class="mt-3 font-size-16 text-white">Sr. {{auth()->user()->name}}</h5>
                     <span class="font-size-13 text-white-50">
                         @switch(auth()->user()->role_id)
                         @case(1)
                         Administrador
                         @break
                         @case(2)
                         Cliente
                         @break
                         @case(3)
                         Experto
                         @break
                         @case(4)
                         Proveedor
                         @break
                         @endswitch

                     </span>
                 </div>
             </div>
         </div>



         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Menu</li>

                 <li>
                     <a href="{{route('dashboard')}}" class="waves-effect">
                         <i class="dripicons-home"></i><span class="badge rounded-pill bg-info float-end"></span>
                         <span>Panel De Control</span>
                     </a>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="dripicons-box"></i>
                         <span>Proyectos</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="#">Ver Todo Los Proyectos</a></li>
                         <li><a href="#">Ver Todos Los Huertos</a></li>
                     </ul>
                 </li>

                 
                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="dripicons-tree"></i>
                         <span>Plantas</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{route('tipo-plantas.index')}}">Tipo Plantas</a></li>
                         <li><a href="{{route('plantas.index')}}">Plantas</a></li>
                         <li><a href="{{route('tipo-afinidads.index')}}">Tipos Afinidades</a></li>
                         <li><a href="{{route('afinidads.index')}}">Afinidades</a></li>
                         <li><a href="{{route('medidas.index')}}">registrar tipos de parametros </a></li>
                         <li><a href="{{route('parametros.index')}}">Parametros de  medición</a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="dripicons-book"></i>
                         <span>Guias</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{route('guias.index')}}">Todas Las Guias</a></li>
                         <li><a href="#">Guias por Plantas</a></li>
                         
                         <li><a href="{{route('requerimientos.index')}}">Requerimientos</a></li>
                         <li><a href="{{route('actividads.index')}}">Actividades</a></li>
                         <li><a href="{{route('tipo-actividads.index')}}">Tipo Actividades</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="dripicons-cart"></i>
                         <span>Inventario</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{route('insumos.index')}}">Ver Lista De Insumos</a></li>
                         <li><a href="{{route('insumos.create')}}">Registrar nuevo insumo</a></li>
                         <li><a href="{{route('tipo-insumos.create')}}">Tipos de insumos</a></li>
                         <!--li><a href="ecommerce-orders.html">Ver productos ofertados</a></li-->
                         <!--li><a href="ecommerce-customers.html">Retirar insumos vencidos</a></li-->
                         <!--li><a href="ecommerce-shops.html">Tienda</a></li-->
                         <!--li><a href="ecommerce-add-product.html">Agregar Producto</a></li-->
                         <!--li><a href="ecommerce-cart.html">Carrito de compras</a></li-->
                         <!--li><a href="ecommerce-checkout.html">Confirmar compra</a></li-->
                     </ul>
                 </li>


                 <li>
                     <a href="javascript: void(0);" class="waves-effect">
                         <i class="dripicons-to-do"></i>
                         <span class="badge rounded-pill bg-danger float-end">6</span>
                         <span>Reportes</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{route('huertos.index')}}">Huertos</a></li>
                         <li><a href="{{route('plantas.index')}}">Plantaciones</a></li>
                     </ul>
                 </li>


             </ul>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
 <!-- Left Sidebar End -->
 @endsection