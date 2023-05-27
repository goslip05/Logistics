<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Sidebar Start -->
    <div class="pb-3 sidebar pe-4">
        <nav class="navbar bg-light navbar-light">
            <a href="{{ route('dashboard') }}" class="mx-4 mb-3 navbar-brand">
                <h3 class="text-primary">Logistics</h3>
            </a>
            <div class="mb-4 d-flex align-items-center ms-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="/img/usuario.svg" alt="" style="width: 40px; height: 40px;">
                    <div class="bottom-0 p-1 border-2 border-white bg-success rounded-circle position-absolute end-0"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="index.html" class="nav-item "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Eventos</a>
                    <div class="bg-transparent border-0 dropdown-menu">
                        <a href="button.html" class="dropdown-item">Ver Eventos</a>
                        <a href="typography.html" class="dropdown-item">Nuevo Evento</a>
                        {{-- <a href="element.html" class="dropdown-item">Certificados</a> --}}
                    </div>
                </div>
                <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Conferencias</a>
                <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Pagos</a>
                <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Certificados</a>
                {{-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Clientes</a> --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Clientes</a>
                    <div class="bg-transparent border-0 dropdown-menu">
                        <a href="{{ route('cliente.show') }}" class="dropdown-item">Ver Clientes</a>
                        <a href="signup.html" class="dropdown-item">Registrar cliente</a>
                        {{-- <a href="404.html" class="dropdown-item">404 Error</a>
                        <a href="blank.html" class="dropdown-item">Blank Page</a> --}}
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="px-4 py-0 navbar navbar-expand bg-light navbar-light sticky-top">
            <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="mb-0 text-primary"><i class="fa fa-hashtag"></i></h2>
            </a>
            <a href="#" class="flex-shrink-0 sidebar-toggler">
                <i class="fa fa-bars"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="border-0 form-control" type="search" placeholder="Buscar">
            </form>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-envelope me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Mensajes</span>
                    </a>
                    <div class="m-0 border-0 dropdown-menu dropdown-menu-end bg-light rounded-0 rounded-bottom">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="/img/usuario.svg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="mb-0 fw-normal">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="/img/usuario.svg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="mb-0 fw-normal">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="/img/usuario.svg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="mb-0 fw-normal">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="text-center dropdown-item">See all message</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-bell me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Notificaciones</span>
                    </a>
                    <div class="m-0 border-0 dropdown-menu dropdown-menu-end bg-light rounded-0 rounded-bottom">
                        <a href="#" class="dropdown-item">
                            <h6 class="mb-0 fw-normal">Profile updated</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="mb-0 fw-normal">New user added</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="mb-0 fw-normal">Password changed</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="text-center dropdown-item">See all notifications</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="/img/usuario.svg" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="m-0 border-0 dropdown-menu dropdown-menu-end bg-light rounded-0 rounded-bottom">
                        
                        <x-responsive-nav-link :href="route('profile.edit')" class="dropdown-item">
                            {{ __('Mi Perfil') }}
                        </x-responsive-nav-link>
                        {{-- <a href="#" class="dropdown-item">Settings</a> --}}
                        <form method="POST" class="dropdown-item" action="{{ route('logout') }}">
                            @csrf
        
                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Sale & Revenue Start -->
        <div class="px-4 pt-4 container-fluid">
            <div class="row g-4">
                <h3 class="text-primary">Visualización Clientes Inscritos</h3>
                <div class="col-sm-6 col-xl-3">
                    <div class="rounded d-flex align-items-center justify-content-between">
                        <div class="ms-3">
                            <p class="mb-2">Inscripciones</p>
                            <h6 class="mb-0">{{$inscripciones->count()}}</h6>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Sale & Revenue End -->




        <!-- Recent Sales Start -->
        <div class="px-4 pt-4 container-fluid">
            <div class="p-4 text-center rounded bg-light">
                <div class="mb-4 d-flex align-items-center justify-content-between">
                    <h6 class="mb-0">Clientes inscritos</h6>
                    <a href="">Ver Todos</a>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0 align-middle text-start table-bordered table-hover">
                        <thead>
                            <tr class="text-dark">
                                
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Documento</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Evento</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>

                        @foreach ($inscripciones as $inscripcion)
                        <tbody>
                            <tr>
                                <td>{{$inscripcion->nombre}}</td>
                            
                            
                                <td>{{$inscripcion->apellidos}}</td>
                            
                        
                                <td>{{$inscripcion->documento}}</td>
                            
                            
                                <td>{{$inscripcion->email}}</td>

                                <td>{{$inscripcion->telefono}}</td>

                                <td>{{$inscripcion->eventos->nombre}}</td>
                            
                            
                                <td><a class="btn btn-sm btn-primary"  href="{{ route('cliente.ver',['id' => $inscripcion->id]) }}">Ver Cliente</a></td>
                            </tr>
                        </tbody>
                        @endforeach
                        
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->




        <!-- Footer Start -->
        <div class="justify-end px-4 pt-4 container-fluid">
            <div class="p-4 bg-light rounded-top">
                <div class="row" style="display: flex;justify-content: center;">
                    <div class="text-center col-12 col-sm-6 ">
                        &copy; <a href="#">Logistics</a>, All Right Reserved. 
                    </div>
                    {{-- <div class="text-center col-12 col-sm-6 text-sm-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    </br>
                    Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Content End -->


</x-app-layout>
