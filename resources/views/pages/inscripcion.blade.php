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
            <a href="index.html" class="mx-4 mb-3 navbar-brand">
                <h3 class="text-primary">Logistics</h3>
            </a>
            <div class="mb-4 d-flex align-items-center ms-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="/img/usuario.svg" alt="" style="width: 40px; height: 40px;">
                    <div class="bottom-0 p-1 border-2 border-white bg-success rounded-circle position-absolute end-0"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                    <span>Usuario</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Eventos</a>
                    <div class="bg-transparent border-0 dropdown-menu">
                        <a href="button.html" class="dropdown-item">Ver Eventos</a>
                        <a href="typography.html" class="dropdown-item">Nuevo Evento</a>
                        {{-- <a href="element.html" class="dropdown-item">Certificados</a> --}}
                    </div>
                </div>
                <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Conferencias</a>
                
                
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

        <div class="px-4 pt-4 container-fluid">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-dark"><strong>Evento:</strong> {{ $eventos->nombre }}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-dark"><strong>Lugar:</strong> {{ $eventos->lugar }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-dark"><strong>Fecha de inicio:</strong> {{ $eventos->fecha_inicio }}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-dark"><strong >Fecha de fin:</strong> {{ $eventos->fecha_fin }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-dark"><strong>Precio:</strong> ${{ $eventos->precio }}</p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="p-4 rounded bg-light h-100">
                        <h6 class="mb-4">Formulario Inscripción</h6>
                        <form action="{{route('cliente.store')}}" method="POST" novalidate >
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class=" form-label-sm text-primary">Nombre</label>
                                <input type="text" class="form-control @error('nombre') border-danger
                                @enderror" id="nombre" name="nombre" value="{{old('nombre')}}" required>
                            
                            @error('nombre')
                            <p class="text-danger">{{$message}}</p>   
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label for="apellidos" class="form-label-sm text-primary">Apellidos</label>
                                <input type="text" class="form-control @error('apellidos') border-danger
                                @enderror" id="apellidos" name="apellidos" value="{{old('apellidos')}}">
                                
                                @error('apellidos')
                            <p class="text-danger">{{$message}}</p>   
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label for="documento" class="form-label-sm text-primary">Documento</label>
                                <input type="text" class="form-control @error('documento') border-danger
                                @enderror" id="documento" name="documento" value="{{old('documento')}}">

                                @error('documento')
                            <p class="text-danger">{{$message}}</p>   
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label-sm text-primary">Correo Electronico</label>
                                <input type="email" class="form-control @error('email') border-danger
                                @enderror" id="email"
                                    aria-describedby="emailHelp" name="email" value="{{old('email')}}">

                                    @error('email')
                            <p class="text-danger">{{$message}}</p>   
                            @enderror
                                <div id="emailHelp" class="form-text">Ingresa tu dirección de correo electronico
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label-sm text-primary">Telefono</label>
                                <input type="text" class="form-control @error('telefono') border-danger
                                @enderror" id="telefono" name="telefono" value="{{old('telefono')}}">

                                @error('telefono')
                            <p class="text-danger">{{$message}}</p>   
                            @enderror
                            </div>
                            <input type="hidden" name="inputEvent" value="{{ $eventos->id }}">
                            <button type="submit" class="btn btn-primary">Inscribirme</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>




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
