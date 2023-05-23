<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login-email.css">
    <link rel="icon" href="./img/Tripadvisor_logoset_solid_green.svg">

    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>   
</head>
<body>
    <section>
        <img src="./img/Tripadvisor_logoset_solid_green.svg" width="50px" height="50px" alt="">
        <h1>Selamat datang <br> kembali.</h1>

        <div class="input">
            
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <b>Alamat email</b>
                <input id="email" type="email" name="email" 
                :value="old('email')" required autofocus autocomplete="username" placeholder="Email"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <b>Sandi</b>
                <input id="password" type="password" name="password"
                required autocomplete="current-password"  placeholder="Password"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                
                <a href="{{ route('password.request') }}">Lupa sandi?</a>

                <div class="btnLogin">
                    <button type="submit">Masuk</button>
                </div>
            </form>
        </div>
        
        <div class="footer">
            <h3>Belum memiliki akun? <a href="{{route('register')}}">Daftar</a> </h3>
            <p>
                Dengan melanjutkan, berarti Anda menyetujui Persyaratan Penggunaan 
                serta mengonfirmasi bahwa Anda telah membaca Pernyataan Privasi dan Cookie kami.
            </p>
            <br>
            <p>
                Situs ini dilindungi reCAPTCHA dan Kebijakan Privasi serta Persyaratan Layanan Google berlaku.
            </p>    
        </div>
    </section>
</body>
</html>