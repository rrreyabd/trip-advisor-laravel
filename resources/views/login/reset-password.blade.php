<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('/css/reset-password.css')}}">
    <link rel="icon" href="{{ asset('/img/Tripadvisor_logoset_solid_green.svg')}}">

    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>   
</head>
<body>
    <section>
        <img src="{{ asset('./img/Tripadvisor_logoset_solid_green.svg')}}" width="50px" height="50px" alt="">
        <h1>Selamat datang <br> kembali.</h1>

        <div class="input">
            
            {{-- <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <b>Email</b>
                <input id="email" type="email" name="email" value="{{$request->email}}" disabled required autofocus autocomplete="username"/>
              
                <b>Kata sandi baru</b>
                <input id="password" type="password" name="password" required autocomplete="new-password"  />
               
                <b>Konfirmasi kata sandi baru</b>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                
                <div class="btnLogin">
                    <button type="submit">Simpan</button>
                </div>
            </form> --}}

            <form method="POST" action="{{ route('password.store') }}">
                @csrf
        
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
        
                <!-- Email Address -->
                <b>Email</b>
                <x-text-input id="email"  type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
        
                <!-- Password -->
                <b>Kata sandi baru</b>
                <input id="password" type="password" name="password" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
        
                <!-- Confirm Password -->
                <b>Konfirmasi kata sandi baru</b>
                <input id="password_confirmation"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        
                <div class="btnLogin">
                    <button type="submit">Simpan</button>
                </div>    
            </form>
        </div>
        
    </section>
</body>
</html>