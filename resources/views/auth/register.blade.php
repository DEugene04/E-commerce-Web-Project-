<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
    
    <script src="https://kit.fontawesome.com/c07884273f.js" crossorigin="anonymous"></script>

      <!-- noto serif font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wdth,wght@0,62.5..100,100..900;1,62.5..100,100..900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="back-btn"><h5 style="text-decoration:underline;"><i class="fa-solid fa-arrow-left"></i><a href="{{ url('/') }}" style="color: black; font-weight:300">Back</a></h5></div>
    <div class="content">
        <div class="logo">
            <img src="assets/logo/logo.png" alt="Logo">
        </div>
        <div class="title-container">
            <h1 class="register-text">Register</h1>
            <h5 class="description">Create an account is a second, just like snapping your finger!</h5>
        </div>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
    
            <!-- Name -->
            <div class="input">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class="mt-4 input">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4 input">
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div class="mt-4 input">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
    
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
    
            <div class="button-container">
                <x-primary-button class="ms-4 button">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            
    
            <div class="flex items-center justify-end mt-4 alreadyRegis">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="color: #392A2A" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
    
                
            </div>
        </form>
    </div>
   


</body>
</html>