<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/login-email.css">
    <link rel="icon" href="./img/Tripadvisor_logoset_solid_green.svg">

    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>   
</head>
<body>
    <div class="register">
        <img src="./img/Tripadvisor_logoset_solid_green.svg" width="50px" height="50px" alt="">
        <h1>Bergabunglah untuk mengakses fitur terbaik Tripadvisor</h1>

        <div class="input">
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="inputNameContainer">

                    <div class="firstName">
                        <b>Nama depan</b>
                        <input id="firstName" type="text" name="firstName" class="inputName" 
                        :value="old('firstName')"  autofocus autocomplete="inputName" placeholder="Nama depan"/>
                    </div>

                    <div class="">
                        <b>Nama belakang</b>
                        <input id="lastName" type="text" name="lastName" class="inputName"
                        :value="old('lastName')"  autofocus autocomplete="lastName" placeholder="Nama belakang"/>
                    </div>
                
                </div>

                <b>Alamat email</b>
                <input id="email" type="email" name="email" :value="old('email')"  autocomplete="username" placeholder="Email"/>

                <b>Sandi</b>
                <input id="password"
                type="password"
                name="password"
                 autocomplete="new-password"  placeholder="Password"/>

                 <b>Konfirmasi Sandi</b>
                <input id="password_confirmation"
                type="password"
                name="password_confirmation" required autocomplete="new-password"  placeholder="Konfirmasi sandi"/>

                <div class="btnLogin">
                    <button type="submit">Daftar</button>
                </div>
            </form>
        </div>
        
        <div class="footer">
            <h3>Sudah memiliki akun? <a href="{{route('login')}}">Masuk</a> </h3>
            <p>
                Dengan melanjutkan, berarti Anda menyetujui Persyaratan Penggunaan 
                serta mengonfirmasi bahwa Anda telah membaca Pernyataan Privasi dan Cookie kami.
            </p>
            <br>
            <p>
                Situs ini dilindungi reCAPTCHA dan Kebijakan Privasi serta Persyaratan Layanan Google berlaku.
            </p>
        </div>
    </div>
</body>
</html>