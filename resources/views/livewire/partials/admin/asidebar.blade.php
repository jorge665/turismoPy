<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{ asset('dist/img/avatar5.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">Turismo PY</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
                <div class="info">
                    <p class="d-block text-light">{{ strtoupper(Auth::user()->name) }} </p>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('admin.dashboard')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Widgets
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('profile')}}" class="nav-link">
                            <i class="nav-icon fas fa-id-card"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Forms
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="pages/forms/general.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Usuarios</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/advanced.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Destinos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/editors.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Actividades</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/validation.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Puntos de Interes</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/validation.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Eventos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/forms/validation.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Noticias</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="nav-link">                            
                            <i class="fas fa-sign-out-alt nav-icon"></i>
                            <p>
                                Cerrar Sesión
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>
