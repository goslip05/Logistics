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
                <a href="index.html" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Eventos</a>
                    <div class="bg-transparent border-0 dropdown-menu">
                        <a href="button.html" class="dropdown-item">Inscripción</a>
                        
                        {{-- <a href="element.html" class="dropdown-item">Certificados</a> --}}
                    </div>
                </div>
                <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Pagos</a>
                
                
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
                    <h4 class="ml-4 text-primary" style="margin-left: 10px; ">Inscripción a Evento:</h4>
                  {{--   <div class="container">
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
                    </div> --}}
                  
                <div class="d-flex">
                    <div class="p-4 rounded bg-light h-100" style="width: 400px;">
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

                    <div class="scroll-container" style="overflow-y: auto; height: 500px;">
                        <div class="books" style="padding-top: 0px;">
                            <div class="book book--the-case-of-the-marber">
                              <div class="book__logo">
                                <svg class="penguin-logo"xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                  <path  stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-2.25-1.313M21 7.5v2.25m0-2.25l-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75l2.25-1.313M12 21.75V19.5m0 2.25l-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25"/>
                                  <ellipse cx="13.2" cy="3.5" transform="rotate(-55.702 13.178 3.54)" rx=".9" ry=".7"/>
                                </svg>
                              </div>
                              <div class="book__publisher">
                                Logistics Presenta
                              </div>
   
                              <div class="book__title">
                                {{ $eventos->nombre }}
                              </div>
                              <div class="book__pre-author"></div>
                              <div class="book__author">
                                Sam Beckham
                              </div>
                              <div class="book__artwork">
                                <svg class="penguin-artwork" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.1 44.8">
                                  <path d="M21.9 16.5c-1.6-2.6-3.9-5.7-4.2-8.9-.2-2 0-4.2-1.4-5.9-.4-.5-.9-.9-1.5-1.2-.6-.3-1.3-.5-2-.5-.6 0-1.3.1-1.9.3-.7.2-1.4.5-2.1.6C8 1 7.3.9 6.4.7 6 .6 5.8.6 5.3.5 5 .4 4.3.2 4.1.5c-.6.5.6 1.2 1 1.4.8.6 1.1.7 1.8 1.4 1 .9 1.8 1.9 2.1 3.2.1.4.1.8.1 1.1.1 5.6-9.2 11.1-9.1 21 0 3.5 1.9 4.1 1.9 2.1 0-2.3.8-4.8 1.6-6.9.2-.5.8-.6.7.2-.2 1.4-.8 3.7-.7 7.5 0 .9.1 1.8.2 2.8.1.7.3 1.5.5 2.2.2.6.4 1.2.7 1.7.2.4.5.8.8 1.2.3.4.6.6 1 .9.2.2.5.3.6.6.2.4-.4.6-.6.7-.3.1-.6.3-.8.4l-1.2.6c-.2.1-.5.2-.7.4s-.3.4 0 .5h.5c.3 0 .6-.1.9.1.4.1.3.5.4.8 0 .4.3.5.6.4.4-.1.6-.4.9-.6.2-.2.4-.4.7-.5.5-.2 1.1-.2 1.6-.1.3 0 .7.1 1-.1.2-.2.1-.7 0-.9-.1-.3-.2-.5-.4-.8-.1-.1-.1-.2-.2-.3-.2-.5 1.5-.9 1.7-.9.8-.2 1.7-.4 2.5-.5.8-.1 1.7-.1 2.5.2.3.1.6.4.8.6.1.2.4.6.2.8-.4.3-.8.5-1.2.8-.2.2-.5.4-.7.6-.2.2-.2.5.1.5h1.2c.3 0 .6 0 .9.2.4.3.5.9.9 1.1.1.1.3.1.4 0 .3-.1.4-.4.6-.6.1-.2.3-.4.5-.6.1-.1.3-.1.5-.1h.9c.2 0 .6.1.8 0 .4-.3-.6-1-.9-1.1-.5-.3-1.2-.6-1.3-1.2-.2-.7.2-1.5.5-2.1.3-.7.8-1.3 1-2 .2-.6.4-1.3.5-2 .5-3.7-.3-7.7-1.4-11.3-.1-.4-.3-.9-.4-1.3-.2-.7.5-.8.8-.2.3.6 2.4 4.6 3 7.6.4 1.9 1.8 2 1.8-1.4-.2-5-2-8.5-4.3-12.1zM11.7 2.4c.6-.9 1.6-1.2 2.4-.7.7.5.9 1.6.3 2.5s-1.7 1.1-2.4.6c-.8-.4-.9-1.5-.3-2.4zm-.7 6c1.1-.8 3.7-1.2 4.4-4.3-.1-.1.1-.3.4 0 .6.6.5 3.3-.4 4.3-.5.5-1.4.6-2.1.7-.8.1-1.6.3-2.3.5s-.7-.6 0-1.2zm6.7 29.7c-.8 0-1.8-.5-3.3-.4-2.5.2-3.3 1.1-5.3.8-1.2-.2-2-.9-2.5-2-.6-1.4-.6-2.8-.7-4.2-.1-1.6-.1-3.1 0-4.7l.3-3.4c.2-1.8.6-3.7 1.1-5.5.4-1.6.8-3.2 1.4-4.7.5-1.1 1.3-2.2 2.4-2.7 1.2-.6 2.9-.7 4.1 0 2.7 1.4 2.6 4.6 2.7 7.2.1 2 .3 4.1.7 6.1.4 2.3 1.3 4.4 1.6 6.6.3 2.5.5 6.7-2.5 6.9z"/>
                                  <ellipse cx="13.2" cy="3.5" transform="rotate(-55.702 13.178 3.54)" rx=".9" ry=".7"/>
                                </svg>
                              </div>
                            </div>
                
                            <div class="book book--conference">
                                <div class="book__logo">
                                  <svg class="penguin-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.1 44.8">
                                    <path d="M21.9 16.5c-1.6-2.6-3.9-5.7-4.2-8.9-.2-2 0-4.2-1.4-5.9-.4-.5-.9-.9-1.5-1.2-.6-.3-1.3-.5-2-.5-.6 0-1.3.1-1.9.3-.7.2-1.4.5-2.1.6C8 1 7.3.9 6.4.7 6 .6 5.8.6 5.3.5 5 .4 4.3.2 4.1.5c-.6.5.6 1.2 1 1.4.8.6 1.1.7 1.8 1.4 1 .9 1.8 1.9 2.1 3.2.1.4.1.8.1 1.1.1 5.6-9.2 11.1-9.1 21 0 3.5 1.9 4.1 1.9 2.1 0-2.3.8-4.8 1.6-6.9.2-.5.8-.6.7.2-.2 1.4-.8 3.7-.7 7.5 0 .9.1 1.8.2 2.8.1.7.3 1.5.5 2.2.2.6.4 1.2.7 1.7.2.4.5.8.8 1.2.3.4.6.6 1 .9.2.2.5.3.6.6.2.4-.4.6-.6.7-.3.1-.6.3-.8.4l-1.2.6c-.2.1-.5.2-.7.4s-.3.4 0 .5h.5c.3 0 .6-.1.9.1.4.1.3.5.4.8 0 .4.3.5.6.4.4-.1.6-.4.9-.6.2-.2.4-.4.7-.5.5-.2 1.1-.2 1.6-.1.3 0 .7.1 1-.1.2-.2.1-.7 0-.9-.1-.3-.2-.5-.4-.8-.1-.1-.1-.2-.2-.3-.2-.5 1.5-.9 1.7-.9.8-.2 1.7-.4 2.5-.5.8-.1 1.7-.1 2.5.2.3.1.6.4.8.6.1.2.4.6.2.8-.4.3-.8.5-1.2.8-.2.2-.5.4-.7.6-.2.2-.2.5.1.5h1.2c.3 0 .6 0 .9.2.4.3.5.9.9 1.1.1.1.3.1.4 0 .3-.1.4-.4.6-.6.1-.2.3-.4.5-.6.1-.1.3-.1.5-.1h.9c.2 0 .6.1.8 0 .4-.3-.6-1-.9-1.1-.5-.3-1.2-.6-1.3-1.2-.2-.7.2-1.5.5-2.1.3-.7.8-1.3 1-2 .2-.6.4-1.3.5-2 .5-3.7-.3-7.7-1.4-11.3-.1-.4-.3-.9-.4-1.3-.2-.7.5-.8.8-.2.3.6 2.4 4.6 3 7.6.4 1.9 1.8 2 1.8-1.4-.2-5-2-8.5-4.3-12.1zM11.7 2.4c.6-.9 1.6-1.2 2.4-.7.7.5.9 1.6.3 2.5s-1.7 1.1-2.4.6c-.8-.4-.9-1.5-.3-2.4zm-.7 6c1.1-.8 3.7-1.2 4.4-4.3-.1-.1.1-.3.4 0 .6.6.5 3.3-.4 4.3-.5.5-1.4.6-2.1.7-.8.1-1.6.3-2.3.5s-.7-.6 0-1.2zm6.7 29.7c-.8 0-1.8-.5-3.3-.4-2.5.2-3.3 1.1-5.3.8-1.2-.2-2-.9-2.5-2-.6-1.4-.6-2.8-.7-4.2-.1-1.6-.1-3.1 0-4.7l.3-3.4c.2-1.8.6-3.7 1.1-5.5.4-1.6.8-3.2 1.4-4.7.5-1.1 1.3-2.2 2.4-2.7 1.2-.6 2.9-.7 4.1 0 2.7 1.4 2.6 4.6 2.7 7.2.1 2 .3 4.1.7 6.1.4 2.3 1.3 4.4 1.6 6.6.3 2.5.5 6.7-2.5 6.9z"/>
                                    <ellipse cx="13.2" cy="3.5" transform="rotate(-55.702 13.178 3.54)" rx=".9" ry=".7"/>
                                  </svg>
                                </div>
                                <div class="book__publisher">
                                  a Penguin Promotion
                                </div>
                                <div class="book__pre-title"></div>
                                <div class="book__title">
                                  Frontend NE: The Conference
                                </div>
                                <div class="book__pre-author"></div>
                                <div class="book__author">
                                  Shamus Plugg
                                </div>
                                <div class="book__artwork">
                                  <svg class="frontendne-logo" xmlns="http://www.w3.org/2000/svg" width="8em" height="8em" viewBox="0 0 120 120" preserveAspectRatio="xMaxYMax meet"><path d="M86.67 43.33L120 43.33 120 76.67 86.67 76.67 86.67 43.33ZM0 86.67L120 86.67 120 120 0 120 0 86.67ZM0 0L120 0 120 33.33 0 33.33 0 0ZM0 43.33L76.67 43.33 76.67 76.67 0 76.67 0 43.33Z"></path></svg>
                                </div>
                              </div>
                
                
                        </div>
                    </div>
                       
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
