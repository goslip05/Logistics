<x-guest-layout>
    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full mt-1"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}
    <!-- Sign Up Start -->
    <div class="container-fluid">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="p-4 mx-3 my-4 rounded bg-light p-sm-5">
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <a href="index.html" class="">
                                <h3 class="text-primary"></i>LOGISTICS</h3>
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" id="name" name="name">
                            <label for="floatingText">Username</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" id="email" name="email">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="mb-4 form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" id="password" name="password" >
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="mb-4 d-flex align-items-center justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <button type="submit" class="py-3 mb-4 btn btn-primary w-100">Sign Up</button>
                        <p class="mb-0 text-center">Already have an Account? <a href="{{ route('login') }}">Sign In</a></p>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
    <!-- Sign Up End -->
</x-guest-layout>
