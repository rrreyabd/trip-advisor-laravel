<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulis ulasan - Tripadvisor</title>

    <link rel="stylesheet" href="{{ asset('/css/ulas.css') }}">
    <link rel="icon" href="{{('/img/Tripadvisor_logoset_solid_green.svg')}}">

    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="hero">
        <div class="title">
            <h1 class="bold">Tulis ulasan, bantu wisatawan lain menikmati trip yang lebih menyenangkan</h1>
        </div>

        <div class="desc">
            <p>Cerita seperti milik Anda akan membantu wisatawan menikmati trip yang lebih baik. Bagikan pengalaman Anda dan bantu sesama wisatawan!</p>
        </div>

        <div class="img">
            <img src="{{ asset ('./img/ulas/hero_image_1.png')}}" alt="">
            <img src="{{ asset ('./img/ulas/hero_image_2.png')}}" alt="">
            <img src="{{ asset ('./img/ulas/hero_image_3.png')}}" alt="">
        </div>
    </section>

    <section class="ulasanList">
        <div class="ulasanContainer">
            <div class="uA">
                <h1>Ulasan Anda</h1>
            </div>
            @if ($ulasans->isEmpty())

            <div class="uB">
                <p>Anda belum memiliki ulasan. Setelah Anda menulis beberapa, ulasan tersebut akan ditampilkan di sini.</p>
            </div>
        
            @else

            @foreach ($ulasans as $ulasan)
                
            <div class="uC">
                <div class="uCa">

                    <img src="{{asset('img/destinasi/' . $ulasan->destination->photo )}}" alt="" width="80px" style="" height="80px">
                    
                    <div class="lok">
                        {{-- <h3>{{$ulasan->destination_id->destination_name}}</h3> --}}
                        <p class="bold large">{{$ulasan->destination->destination_name}}</p>
                        <p>{{$ulasan->destination->city}}, {{$ulasan->destination->country}}</p>
                    </div>
                    
                    <form action="{{ route('ulasan-delete', ['id' => $ulasan->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus ulasan</button>
                    </form>
                    
                </div>

                <div class="uCb">
                    <h3>Rating : {{$ulasan->rating_id}}/5</h3>
                    <h4>{{$ulasan->title}}</h4>
                    <p>{{\Carbon\Carbon::parse($ulasan->upload_date)->translatedFormat('d F Y')}}</p>
                    <p>{{$ulasan->content}}</p>
                    @foreach ($ulasan->comment_photo as $comment_photo)
                        @if (!empty($comment_photo->photo))
                            <img src="{{ asset('img/ulasan/' . $comment_photo->photo) }}" width="100px" height="100px" alt="">
                        @endif
                    @endforeach
                
        
                    <p class="small">Ditulis pada {{\Carbon\Carbon::parse($ulasan->upload_date)->translatedFormat('d F Y')}}</p>
                    <p class="small">Ulasan ini adalah opini subjektif dari anggota Tripadvisor, bukan dari Tripadvisor LLC. Tripadvisor melakukan pemeriksaan terhadap ulasan.</p>
                </div>
            </div>
            @endforeach

            @endif

        </div>
    </section>
</body>
</html>