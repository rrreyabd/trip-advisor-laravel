<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trip</title>
    <link rel="icon" href="{{asset('img/Tripadvisor_logoset_solid_green.svg')}}">
    <link rel="stylesheet" href="{{ asset('./css/trip.css')}}">
</head>
<body>
    @include('layout.nav')
    @include('layout.kategori')
    
    <div class="tsection">
        <div class="theader">
            <h1 class="bold">Trip</h1>
        </div>

        <div class="tbody">
            <div class="tbodyButton">
                <a href="{{ route('trip', ['id' => Auth::user()->id, 'type' => 'all']) }}">Semua Perjalanan</a>
                <a href="{{ route('trip', ['id' => Auth::user()->id, 'type' => 'private']) }}">Perjalanan Pribadi</a>
                <a href="{{ route('trip', ['id' => Auth::user()->id, 'type' => 'public']) }}">Perjalanan Publik</a>
                <a href="{{ route('favorite', ['id' => Auth::user()->id]) }}">Simpanan Saya</a>
            </div>
            <div class="tbodyTrip">
                <button id="openModalBtn">
                    <div class="tbodyAdd">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-plus-filled" width="17" height="17" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z" fill="currentColor" stroke-width="0"></path>
                        </svg>&nbsp;
                        <b>Buat Perjalanan</b>
                    </div>
                </button>


                @foreach($plans as $plan)
                <a href="{{ route('detail_trip', ['id'=> $plan->id]) }}">
                    <div class="tbodyBorder">
                        <div class="tbodyBorderImg">
                            <img src="{{ asset ('https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/4d/47/82/jeju-island.jpg?w=1200&h=-1&s=1') }}" alt="">
                        </div>
                        
                        <div class="tbodyBorderDetail">
                            <br>
                            <h3 class="bold"></h3>
                            <p>oleh <span class="bold">{{ $plan->user->username }}</spon> </p>

                            <p><span class="bold">{{ $plan->trip_name }}</span> </p>
                            <p style="color:gray; margin-top:5px;">{{ $plan->trip_type }}</p>
                        </div>

                        <img src="{{ asset('img/profile_photo/' . $plan->user->profile_photo) }}" class="profilePhoto" alt="">
                        <form action="{{ route('delete_plan', ['id' => $plan->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="del-button">    
                                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </div>
                        </form>
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
                <form action="{{ route('trip_plan') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <label for="trip_name">Nama Perjalanan</label>
                    <input type="text" id="trip_name" required name="trip_name">

                    <label for="trip_info">Keterangan</label>
                    <input type="text" id="trip_info" required name="trip_info">

                    <label for="trip-day">Jumlah Hari</label>
                    <input type="number" id="trip_day" required name="days">

                    <div class="radio-group">
                        <p class="bold">Pilih siapa yang dapat melihat Trip Anda</p>
                        <input type="radio" id="option1" required name="trip_type" value="pribadi">Pribadi
                        <input type="radio" id="option2" required name="trip_type" value="publik">Publik
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