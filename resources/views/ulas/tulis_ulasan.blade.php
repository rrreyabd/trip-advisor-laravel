<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tulis Ulasan</title>
    <link rel="icon" href="{{asset('img/Tripadvisor_logoset_solid_green.svg')}}">
    <link rel="stylesheet" href="{{asset('./css/tulis_ulasan.css')}}">
</head>
<body>
    @include('layout.nav')

    <div class="tu">
        <div class="tua">
            <div class="tuab">
                <h1 class="bold">Beri tahu kami tentang kunjungan Anda.</h1>
                <div class="borderUlasan">
                    <img src="{{asset('/img/destinasi/' . $destination->photo)}}" alt="">
                    <p class="bold">{{$destination->destination_name}}</p>
                    <p>{{$destination->address}}</p>
                </div>
            </div>

            <div class="tuac">
                <div class="tuacA">
                    <div class="tuRate w-100">
                        <h2 class="bold">Bagaimana penilaian Anda tentang pengalaman Anda?</h2>
                        <br>
                            <form action="{{route('create-ulasan')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="destination_id" value="{{$destination->id}}">
                                <input type="hidden" name="destination_type" value="{{$destination->destination_type}}">
                                
                                <input type="radio" name="rating_id" value="1"> <b>Sangat Buruk</b>
                                <input type="radio" name="rating_id" value="2"> <b>Buruk</b>
                                <input type="radio" name="rating_id" value="3"> <b>Rata-rata</b>
                                <input type="radio" name="rating_id" value="4"> <b>Sangat Bagus</b>
                                <input type="radio" name="rating_id" value="5"> <b>Luar Biasa</b>
                            <br><br><br>

                            <h2 class="bold">Kapan Anda pergi?</h2>
                                <input type="date" name="date" id="date" class="tanggal">
                            <br><br><br>

                            <h2 class="bold">Dengan siapa Anda pergi?</h2>
                                <input type="radio" name="visit_type" value="Pasangan">    <b>Pasangan</b>
                                <input type="radio" name="visit_type" value="Keluarga">    <b>Keluarga</b>
                                <input type="radio" name="visit_type" value="Teman">    <b>Teman</b>
                                <input type="radio" name="visit_type" value="Bisnis">    <b>Bisnis</b>
                                <input type="radio" name="visit_type" value="Sendiri">    <b>Sendirian</b>
                            <br><br><br>
                            
                            <h2 class="bold">Beri Judul Ulasan Anda</h2>
                                <textarea name="title" id="title" cols="70" rows="1" class="bold" placeholder="Beri kami intisari pengalaman Anda"></textarea>
                            <br><br><br>
                            
                            <h2 class="bold">Tulis Ulasan</h2>
                                <textarea name="content" id="content" cols="70" rows="8" class="bold" placeholder="Tempat ini cocok untuk menikmati malam kasual.."></textarea>
                            <br><br><br>
                            
                            <h2 class="bold">Tambahkan Foto</h2>
                            <p>Opsional</p>
                                <input type="file" id="photo" name="photo" style="margin-top: 20px;">
                            <br><br><br>
                            
                            <button type="submit" class="ulasanSubmit bold">Kirim Ulasan</button>
                            </form>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>