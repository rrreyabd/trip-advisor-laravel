<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="./css/lupa-sandi.css">
    <link rel="icon" href="./img/Tripadvisor_logoset_solid_green.svg">

    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>   
</head>
<body>
    <section id="section" class="email">
        <img src="./img/Tripadvisor_logoset_solid_green.svg" width="50px" height="50px" alt="">
        <h1>Lupa sandi?</h1>
        <p>Tidak masalah. Masukkan alamat email Anda di bawah ini. Kami akan mengirim link untuk membuat ulang sandi.</p>
        
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="input">
                <b>Alamat Email</b>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Email">

                <div class="button">
                    <button type="submit" id="kirim">Kirim link</button>
                </div>
            </div>
        </form>
        
        <div class="footer">
            <p>
                Situs ini dilindungi reCAPTCHA dan Kebijakan Privasi serta Persyaratan Layanan Google berlaku.
            </p>
        </div>
    </section>

    <section class="selesai">
        <h1>Berikut cara untuk membuat ulang sandi</h1>
        <p>Jika terdapat akun untuk alamat email ini, Anda akan segera menerima email dari kami.</p>
        <p>1. Buka email yang dikirimkan ke Email anda</p>
        <p>2. Klik link dalam email untuk membuat ulang sandi.</p>
        <p>NB. Link ini akan berlaku selama 24 jam.</p>
    </section>

    <script>
        const myButton = document.getElementById('kirim');
        const myDiv = document.getElementById('section');

        myButton.addEventListener('click', () => {
            // myDiv.classList.remove('email');
            myDiv.classList.add('transparent');
        });
    </script>
</body>
</html>