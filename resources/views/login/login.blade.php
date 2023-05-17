<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="icon" href="./img/Tripadvisor_logoset_solid_green.svg">

    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>   
</head>
<body>
    <section>
        <img src="./img/Tripadvisor_logoset_solid_green.svg" width="50px" height="50px" alt="">
        <h1>Masuk untuk mengakses fitur terbaik dari TripAdvisor.</h1>
        <!-- <b class="times">&times;</b> -->
        <div class="btnLogin">
            <i class="fa-googl">
                <img src="https://static.tacdn.com/img2/google/G_color_40x40.png" width="18" height="18" alt="">
            </i>
            <a href="{{ route('login') }}">
                <p>
                    Lanjutkan dengan Google
                </p>
            </a>
            <i class="fa-regular fa-envelope"></i>
            <a href="{{ route('login') }}">
                <p>
                    Lanjutkan dengan Email
                </p>
            </a>
        </div>
        
        <div class="footer">
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