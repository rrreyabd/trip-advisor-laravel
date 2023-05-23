<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Email</title>
    <link rel="stylesheet" href="{{ asset('css/verify_email.css')}}">
</head>
<body>
    <div class="verify-email-body">
        <div class="verify-email-container">
            <div class="header">
                <img src="{{asset('img/Tripadvisor_logoset_solid_green.svg')}}" width="40px" height="40px" alt="">
                <h3 class="bold">Verifikasi Email Anda</h3>
            </div>
            
            <div class="main">
                <p class="bold">Cek email Anda untuk memverifikasi</p>

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit">Kirim ulang pesan verifikasi</button>
                </form>

                <p>atau</p>

                <a class="bold" href="{{route('logout')}}">Logout</a>
            </div>
            
        </div>
    </div>    
</body>
</html>