<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <link rel="icon" href="./img/Tripadvisor_logoset_solid_green.svg">

</head>

<body class="BodyContainer">
    <nav>
        @include('layout.nav')
        @include('layout.kategori')
    </nav>

    <div class="ProfileContainer">
        <div class="ProfileMainContainer">
            <div class="TopProfile">
                <div class="TopProfileImage">
                    @if (Auth::check())
                        <img src="{{ asset('img/' . Auth::user()->profile_photo) }}" alt="Profile Photo">
                    @endif
                </div>
                <div class="TopProfileDetail">
                    <div class="TopTopProfileDetail">
                        <div class="Username">
                            <h2 class="bold">{{Auth::user()->firstName}} {{Auth::user()->lastName}}</h2>
                            <span>@</span><span>{{Auth::user()->username}}</span>
                        </div>

                        <div class="EditProfile">
                            <button id="editButton">
                                <p class="bold">Edit profil</p>
                            </button>
                        </div>

                        <div id="editProfileModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                
                                
                            </div>
                        </div>


                    </div>

                    <div class="BottomTopProfileDetail">
                        {{-- <center> --}}
                            <h3>Kontribusi</h3>
                            <h2>1</h2>
                        {{-- </center> --}}
                    </div>
                </div>
            </div>
            
            
            <div class="BottomProfile">
                <div class="BottomLeftProfile">
                    <div class="TopBottomLeftProfile">
                        <b>Pendahuluan</b>
                        
                        <div class="Location">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-filled" width="12" height="12" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor"></path>
                             </svg>
                             <span>{{Auth::user()->city}}, &nbsp;</span>
                             <span> {{Auth::user()->country}}</span>
                            </div>

                        <div class="JoinDate">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                                <path d="M16 3l0 4"></path>
                                <path d="M8 3l0 4"></path>
                                <path d="M4 11l16 0"></path>
                                <path d="M8 15h2v2h-2z"></path>
                             </svg>
                             <p>Bergabung pada {{ \Carbon\Carbon::parse(Auth::user()->created_at)->translatedFormat('F Y') }}</p>
                        </div>

                        <div class="WebUrl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M20.985 12.52a9 9 0 1 0 -8.451 8.463"></path>
                                <path d="M3.6 9h16.8"></path>
                                <path d="M3.6 15h10.9"></path>
                                <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                                <path d="M12.5 3a16.996 16.996 0 0 1 2.391 11.512"></path>
                                <path d="M19 22v-6"></path>
                                <path d="M22 19l-3 -3l-3 3"></path>
                            </svg>
                            @if (Auth::user()->website)
                            <a href="{{Auth::user()->website}}" target="_blank">
                                <b>{{ parse_url(Auth::user()->website)['host'] }}</b>    
                            </a>
                            @else 
                            <a href="">
                                <p>Tambahkan situs web</p>
                            </a>
                            @endif
                        </div>

                        <div class="ProfileDescription">
                            @if (Auth::user()->about)
                            <p>{{Auth::user()->about}}</p>
                            @else
                            <p>Description here</p>
                            @endif
                        </div>
                    </div>

                    <div class="BottomBottomLeftProfile">
                        <b>Berikan saran wisata Anda</b>

                        <div class="PostingFoto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-camera" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2"></path>
                                <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                             </svg>
                             <a href="">
                                <p>Posting Foto</p>
                             </a>
                        </div>

                        <div class="TulisUlasan">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                <path d="M16 5l3 3"></path>
                            </svg>
                            @php
                                 $user = Auth::user();
                            @endphp
                            <a href="{{ url('/ulas', ['id' => $user->id] ) }}">
                                <p>Tulis Ulasan</p>
                            </a>
                        </div>
                    </div>

                    <div class="keluar">
                        <b>Logout</b>
                        <div class="keluarLink">
                            <a class="bold" href="{{ route('logout')}}">Logout</a>
                        </div>
                    </div>
                </div>

                <div class="BottomRightProfile">
                    <div class="carousel">
                        
                        <div class="carousel-slide">
                            <div class="TopCarousel">
                                <div class="LeftTopCarousel">
                                    <div class="TopCarouselImage">
                                        <img src="{{ asset('img/' . Auth::user()->profile_photo) }}" alt="">
                                    </div>
                                    
                                    <div class="TopCarouselDetail">
                                @foreach ($photos as $photo)
                                        <b>{{Auth::user()->firstName}} {{Auth::user()->lastName}} </b>
                                        <p class="small">{{\Carbon\Carbon::parse($photo->upload_date)->translatedFormat('d F Y')}}</p>
                                    </div>
                                </div>

                                <div class="DeleteCarousel">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7l16 0"></path>
                                        <path d="M10 11l0 6"></path>
                                        <path d="M14 11l0 6"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                     </svg>
                                </div>
                            </div>

                            <div class="carousel-image">
                                
                                    <img src="{{ asset('img/' . $photo->photo) }}" alt="Profile Photo">
                                @endforeach
                            </div>

                            <div class="carousel-details">
                                <p>{{$photo->content}}</p>
                                <a href="{{route('destinasi_detail' , ['destination_id' => $photo->destination->id] )}}">
                                    <b>{{$photo->destination->destination_name}}</b>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        @include('layout.footer')
    </footer>

    {{-- <div class="carousel">
        <div class="carousel-slide">
            <img src="https://i.pinimg.com/564x/6d/c3/86/6dc386bea5a925e6f0eb435ece359a1f.jpg" alt="Gambar 1"
                class="carousel-image">
            <div class="carousel-details">
                <h3>Detail Gambar 1</h3>
                <p>Deskripsi gambar 1.</p>
            </div>
        </div>

        <div class="carousel-slide">
            <img src="https://i.pinimg.com/564x/31/59/fc/3159fc8d8df79e2165f05a433a645107.jpg" alt="Gambar 2"
                class="carousel-image">
            <div class="carousel-details">
                <h3>Detail Gambar 2</h3>
                <p>Deskripsi gambar 2.</p>
            </div>
        </div>

        <div class="carousel-slide">
            <img src="https://i.pinimg.com/564x/b3/34/1b/b3341b95b97dc49444309769bc1033a8.jpg" alt="Gambar 3"
                class="carousel-image">
            <div class="carousel-details">
                <h3>Detail Gambar 3</h3>
                <p>Deskripsi gambar 3.</p>
            </div>
        </div>
    </div> --}}

    <script>
        // Mengambil referensi ke elemen tombol dan modal
        var editButton = document.getElementById("editButton");
        var editProfileModal = document.getElementById("editProfileModal");
    
        // Mendapatkan elemen close di dalam modal
        var closeBtn = editProfileModal.getElementsByClassName("close")[0];
    
        // Ketika tombol diklik, tampilkan modal
        editButton.addEventListener("click", function() {
            editProfileModal.style.display = "block";
        });
    
        // Ketika tombol close di dalam modal diklik, sembunyikan modal
        closeBtn.addEventListener("click", function() {
            editProfileModal.style.display = "none";
        });
    
        // Jika pengguna mengklik di luar modal, sembunyikan modal
        window.addEventListener("click", function(event) {
            if (event.target == editProfileModal) {
                editProfileModal.style.display = "none";
            }
        });
    </script>

    <script src="./js/profile.js"></script>
</body>

</html>