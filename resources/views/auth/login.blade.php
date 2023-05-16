<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <button class="btn btn-danger">ejemplo</button>
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
        <!-- Sign In Start -->
        
        <div class="container-fluid">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                        <div class="p-4 mx-3 my-4 rounded bg-light p-sm-5">
                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                <a href="index.html" class="">
                                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>LOGISTICS</h3>
                                </a>
                                <h3 class="font-extrabold">Sign In</h3>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="email" class="form-control" name="email" id="email" required autofocus id="floatingInput" placeholder="name@example.com">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"  name="password" id="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="mb-4 d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <a href="">Forgot Password</a>
                            </div>
                            <button type="submit" class="py-3 mb-4 btn btn-primary w-100">Sign In</button>
                            <p class="mb-0 text-center">Don't have an Account? <a href="{{ route('register') }}">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </form>    
        </div>
        
        
        <!-- Sign In End -->
    
   
</x-guest-layout>
