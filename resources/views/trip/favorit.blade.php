<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trip</title>

    <link rel="stylesheet" href="{{ asset('./css/trip.css')}}">
</head>
<body>
    @include('layout.nav')
    @include('layout.kategori')
    
    <div class="tsection">
        <div class="theader">
            <h1 class="bold">Favorite</h1>
        </div>

        <div class="tbody">
            <div class="tbodyButton">
                <a href="{{ route('trip', ['id' => Auth::user()->id ]) }}">Semua Perjalanan</a>
                <a href="">Perjalanan Pribadi</a>
                <a href="">Perjalanan Publik</a>
                <a href="{{ route('favorite', ['id' => Auth::user()->id ]) }}">Simpanan Saya</a>
            </div>
            <div class="tbodyTrip">
         
                @foreach($favorites as $favorite)
                    @if($favorite->destination->destination_type == "restoran")
                        <a href="{{ route('restoran_detail', ['id'=> $favorite->destination->id]) }}">
                    @elseif($favorite->destination->destination_type == "hotel")
                        <a href="{{ route('hotel_detail', ['id'=> $favorite->destination->id]) }}">
                    @elseif($favorite->destination->destination_type == "wisata")
                        <a href="{{ route('destinasi_detail', ['id'=> $favorite->destination->id]) }}">
                    @endif
                        <div class="tbodyBorder">
                            <div class="tbodyBorderImg">
                                <img src="{{ asset ('img/destinasi/' . $favorite->destination->photo) }}" 
                                style="object-fit: cover; width:100%"
                                alt="">
                            </div>
                            
                            <div class="tbodyBorderDetail">
                                <br>
                                <h3 class="bold">{{ $favorite->destination->destination_name }}</h3>
                                <p><span class="bold"></span></p>
                                <p style="color:gray; margin-top:5px;">{{ $favorite->destination->category }}</p>
                            </div>
                        </div>    
                    </a>
                @endforeach
            </div>
        </div>
    </div>


    @include('layout.footer')
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-top">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                </svg>
                <h2>Buat Perjalanan</h2>
                <span class="close">&times;</span>
            </div>
            <div class="modal-content-inner">
                <form action="">
                    <label for="trip-name">Nama Perjalanan</label>
                    <input type="text" id="trip-name">

                    <label for="trip-day">Jumlah Hari</label>
                    <input type="number" id="trip-day">

                    <div class="radio-group">
                        <p class="bold">Pilih siapa yang dapat melihat Trip Anda</p>
                        <input type="radio" id="option1" name="trip-type" value="option1">Pribadi
                        <input type="radio" id="option2" name="trip-type" value="option2">Publik
                    </div>
                    <button type="submit">Buat</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("openModalBtn");
        var closeBtn = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        closeBtn.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>