 <!-- ========== Left Sidebar Start ========== -->
 @section('sidebar-left')
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
                         <i class="dripicons-home"></i><span class="badge rounded-pill bg-info float-end">3</span>
                         <span>Panel De Control</span>
                     </a>
                 </li>

                 <li>
                     <a href="{{route('misproyectos')}}" class=" waves-effect">
                         <i class="folder-cog"></i>
                         <span>Proyectos</span>
                     </a>
                 </li>

                 <li>
                     <a href="{{route('suelos.index')}}" class=" waves-effect">
                         <i class="texture-box"></i>
                         <span>Registrar Área Productiva</span>
                     </a>
                 </li>

                 <li>
                     <a href="{{route('huertos.index')}}" class=" waves-effect">
                         <i class="mditree"></i>
                         <span>Huertos</span>
                     </a>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="dripicons-cart"></i>
                         <span>Inventario</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="#">Ver mi inventario</a></li>
                         <li><a href="#">Registrar nuevo insumo</a></li>
                         <li><a href="#">Ver productos ofertados</a></li>
                         <li><a href="#">Retirar insumos vencidos</a></li>
                         <li><a href="#">Tienda</a></li>
                         <li><a href="#">Agregar Producto</a></li>
                         <li><a href="#">Carrito de compras</a></li>
                         <li><a href="#">Confirmar compra</a></li>
                     </ul>
                 </li>

                 <li class="menu-title">Proyecto</li>


                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="dripicons-suitcase"></i>
                         <span>Proyecto</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="ui-dropdowns.html">Área Producción</a></li>
                         <li><a href="ui-alerts.html">Plantas</a></li>
                         <li><a href="ui-buttons.html">Calendario</a></li>
                         <li><a href="ui-cards.html">Actividades pendientes</a></li>
                         <li><a href="ui-carousel.html">Actividades finalizadas</a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="waves-effect">
                         <i class="dripicons-to-do"></i>
                         <span class="badge rounded-pill bg-danger float-end">6</span>
                         <span>Reportes</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="form-validation.html">Huertos</a></li>
                         <li><a href="form-elements.html">Plantaciones</a></li>
                     </ul>
                 </li>


                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="dripicons-checklist"></i>
                         <span>Multi Level</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="true">
                         <li><a href="javascript: void(0);">Level 1.1</a></li>
                         <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="javascript: void(0);">Level 2.1</a></li>
                                 <li><a href="javascript: void(0);">Level 2.2</a></li>
                             </ul>
                         </li>
                     </ul>
                 </li>

             </ul>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
 <!-- Left Sidebar End -->
 @endsection