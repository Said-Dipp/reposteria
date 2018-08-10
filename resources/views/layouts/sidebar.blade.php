<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center">
                <h2 class="h5">{{ auth()->user()->name }}</h2>
                <span>{{ auth()->user()->rol}}</span>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo">
                <a href="index.html" class="brand-small text-center"> 
                    <strong>S</strong>
                    <strong class="text-primary">I</strong>
                </a>
            </div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Menu</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li>
                    <a href="{{url('admin/categoriaproducto')}}"> 
                        <i class="fab fa-product-hunt"></i> Categoria de producto                             
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/producto')}}"> 
                        <i class="fab fa-product-hunt"></i> Productos                             
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/cliente')}}"> 
                        <i class="fab fa-product-hunt"></i> Cliente                             
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/pedido')}}"> 
                        <i class="fab fa-product-hunt"></i> Pedidos                             
                    </a>
                </li>
                 <li>
                    <a href="{{url('admin/promocion')}}"> 
                        <i class="fab fa-product-hunt"></i> Promociones                             
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/venta')}}"> 
                        <i class="fab fa-product-hunt"></i> Ventas                            
                    </a>
                </li>
                
            
                    <!-- <li>
                        <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
                            <i class="fa fa-stop"></i>Sanciones 
                        </a>
                        <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                            <li>
                                <a href="/sancion"> 
                                    <i class="fa fa-exclamation-triangle"></i>Jugadores                             
                                </a>
                            </li>
                            <li>
                                <a href="/deuda"> 
                                    <i class="fa fa-exclamation-triangle"></i>Equipos                             
                                </a>
                            </li>
                        </ul>
                    </li> -->
            </ul>
        </div>
        <!-- <div class="admin-menu">
            <h5 class="sidenav-heading">Second menu</h5>
            <ul id="side-admin-menu" class="side-menu list-unstyled">
                <li> 
                    <a href="/cancha"> 
                        <i class="fa fa-home"> </i>Canchas
                    </a>
                </li>
                <li> 
                    <a href="/reporte"> 
                        <i class="fa fa-home"> </i>Reportes
                    </a>
                </li>
                <li> 
                    <a href="/user"> 
                        <i class="fa fa-home"> </i>Usuarios
                    </a>
                </li>
            </ul>
        </div> -->
    </div>
</nav>  