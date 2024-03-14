  <!-- noto serif font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wdth,wght@0,62.5..100,100..900;1,62.5..100,100..900&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/c07884273f.js" crossorigin="anonymous"></script>

    <!-- Session Status -->
    <body style="margin:0px; padding:0px; box-sizing:border-box;">
        <div style="background-color:#F9F1E9;">
            
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div style="display:flex; justify-content:start; margin-left: 3rem; font-size:clamp(8px, 2vw, 24px);"><h5 style="text-decoration:underline;"><i class="fa-solid fa-arrow-left"></i><a href="{{ url('/') }}" style="color: black; font-weight:300">Back</a></h5></div>
                <div style="height: 100vh; display:flex ; flex-direction:column; align-items: center; justify-content:center; ">
                    
                    <div>
                        <img src="assets/logo/logo.png" alt="Logo">
                    </div>
                    <div style="display: flex; justify-content:center; font-size:clamp(30px, 6vw, 40px); margin-top:-2rem;">
                        <h1 style="font-family: 'Noto Serif', serif; font-weight:400;">Login</h1>
                    </div>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                
                    <!-- Email Address -->
                    <div style="display:flex; flex-direction:column; font-size:clamp(20px, 4vw, 30px);">
                        <x-input-label for="email" :value="__('Email')" style="" />
                        <x-text-input id="email" class="block mt-1 w-full" style="border: none; border-bottom: 1px solid black; border-radius:0px; width: 40vw; background-color:transparent; padding:5px;" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" style="font-size:clamp(15px, 3vw, 20px)"  />
                    </div>
        
                    <!-- Password -->
                    <div class="mt-4" style="display:flex; flex-direction:column; font-size:clamp(20px, 4vw, 30px); margin-top:2rem;">
                        <x-input-label for="password" :value="__('Password')" />
            
                        <x-text-input id="password" style="border: none; border-bottom: 1px solid black; border-radius:0px; background-color:transparent;  padding:5px;" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
            
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
        
                    <!-- Remember Me -->
                    <div class="block mt-4" style="margin-top: 1rem;">
                        <label for="remember_me" class="inline-flex items-center" style="font-size:clamp(10px, 2vw, 18px);" >
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
        
                    {{-- button --}}
                    <div style="display: flex; justify-content:center;">
                        <x-primary-button class="ms-3" style="width: 15vw; padding: 6px; border-radius:4px; background-color:#392A2A; color:white; font-size:clamp(10px, 3vw, 15px); margin-top:2rem;">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                
        
                    <div class="flex items-center justify-end mt-4" style="display:flex; align-items:center; justify-content:center; gap: 0.2rem;"> 
                        {{-- @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}" style="color: #392A2A">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif --}}
                        <p>Don't have an account yet?</p>
                        <a href="{{ url('/register') }}" style="color: #392A2A; font-weight:700">Register Here!</a>
        
                    
                    </div>
                </form>
            </div>
        </div>
    </body>
    
    
    
