<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <link rel="icon" href="{{asset('/img/Tripadvisor_logoset_solid_green.svg')}}">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body class="BodyContainer">
    <nav>
        @include('layout.nav')
        @include('layout.kategori')
    </nav>

    
    <div class="ProfileContainer">
        @if(session('success'))
            <div id="alertDiv" class="alert alert-success alert-dismissible">
                <button id="closeBtn" type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('success') }}
            </div>
        @endif
        <div class="ProfileMainContainer">
            <div class="TopProfile">
                <div class="TopProfileImage">
                    @if (Auth::check())
                        <img src="{{ asset('img/profile_photo/' . Auth::user()->profile_photo) }}" alt="Profile Photo">
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
                                <h3 class="bold">Edit Profil</h3>
                                <form action="{{route('edit_bio', ['id' => $user->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modalContainer">
                                        <div class="imageModal">
                                            <img id="profile-image" src="{{asset('img/profile_photo/' . Auth::user()->profile_photo )}}" style="margin-bottom: 10px;width: 120px; border-radius: 50%" height="120px" alt="Foto Profil">
                                            <input type="file" name="photo">
                                        </div>
                                        <div class="inputModal">
                                            <div class="inputMain">
                                                <label for="firstName" class="bold">Nama Depan</label>
                                                <input type="text" value="{{$user->firstName}}" name="firstName">
                                            </div>
                                                <div class="inputMain">
                                                <label for="lastName" class="bold">Nama Belakang</label>
                                                <input type="text" value="{{$user->lastName}}" name="lastName">
                                            </div>
                                                <div class="inputMain">
                                                <label for="username" class="bold">Nama Pengguna</label>
                                                <input type="text" value="{{$user->username}}" name="username">
                                            </div>
                                                <div class="inputMain">
                                                <label for="address" class="bold">Alamat (opsional)</label>
                                                <input type="text" value="{{$user->address}}" name="address">
                                            </div>
                                                <div class="inputMain">
                                                <label for="post_code" class="bold">Kode Pos (opsional)</label>
                                                <input type="text" value="{{$user->post_code}}" name="post_code">
                                            </div>
                                                <div class="inputMain">
                                                <label for="city" class="bold">Kota</label>
                                                <input type="text" value="{{$user->city}}" name="city">
                                            </div>
                                            <div class="inputMain">
                                                <label for="province" class="bold">Provinsi</label>
                                                <input type="text" value="{{$user->province}}" name="province">
                                            </div>
                                                <div class="inputMain">
                                                <label for="country" class="bold">Negara</label>
                                                <input type="text" value="{{$user->country}}" name="country">
                                            </div>
                                                <div class="inputMain">
                                                <label for="website" class="bold">Website (https://)</label>
                                                <input type="text" value="{{$user->website}}" name="website">
                                            </div>
                                        
                                            <div class="descInput">
                                                <label for="about" class="bold">Tentang</label>
                                                <input type="text" value="{{$user->about}}" name="about">
                                            </div> 
                                            
                                            <button class="bold" type="submit">Simpan</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>

                    <div class="BottomTopProfileDetail">
                        {{-- <center> --}}
                            <h3>{{$contribution}} Kontribusi</h3>
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
                             @if (Auth::user()->city)
                             <span>{{Auth::user()->city}}, &nbsp;</span>
                             @else
                             <span>Tambahkan lokasi</span>
                             @endif
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
                            <p>Tambahkan situs web</p>
                            @endif
                        </div>

                        <div class="ProfileDescription">
                            @if (Auth::user()->about)
                            <p>{{Auth::user()->about}}</p>
                            @else
                            <p>Tambahkan deskripsi</p>
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
                             <button id="openModalBtn">
                                <p>Posting Foto</p>
                             </button>
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
                                <p>Lihat Ulasan</p>
                            </a>
                        </div><link rel="icon" href="{{asset('img/Tripadvisor_logoset_solid_green.svg')}}">
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
                        
                        @foreach ($photos as $photo)
                        <div class="carousel-slide">
                            <div class="TopCarousel">
                                <div class="LeftTopCarousel">
                                    <div class="TopCarouselImage">
                                        <img src="{{ asset('img/profile_photo/' . Auth::user()->profile_photo) }}" alt="">
                                    </div>
                                    
                                    <div class="TopCarouselDetail">
                                        <b>{{Auth::user()->firstName}} {{Auth::user()->lastName}} </b>
                                        <p class="small">{{\Carbon\Carbon::parse($photo->upload_date)->translatedFormat('d F Y')}}</p>
                                    </div>
                                </div>

                                <div class="DeleteCarousel">
                                    <form action="{{ route('photo-delete', ['id' => $photo->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M4 7l16 0"></path>
                                                <path d="M10 11l0 6"></path>
                                                <path d="M14 11l0 6"></path>
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="carousel-image">
                                
                                    <img src="{{ asset('img/upload_photo/' . $photo->photo) }}" alt="Profile Photo">
                                
                            </div>

                            <div class="carousel-details">
                                <p style="margin-bottom: 10px;">{{$photo->content}}</p>
                                <a href="{{route('destinasi_detail' , ['id' => $photo->destination->id] )}}">
                                    <b ">{{$photo->destination->destination_name}}</b>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        
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
    <div id="modal" class="modal">
        <div class="modal-content">
            <span id="closeModalBtn" class="close">&times;</span>
            <h2>Upload Image</h2>
            <form action="{{ route('upload_photo') }}" method="POST" enctype="multipart/form-data" id="searchForm" style="margin-top:20px">
            @csrf
            <input type="file" id="imageInput" name="image" accept="image/*">
            <div id="imageInfo" class="image-info">
                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                <textarea type="text" 
                style="display:block; margin-top:20px; width:100%; height: 100px; padding-top:5px; padding-left:5px;"
                id="captionInput" required name="content" value=""
                placeholder="Beri tahu sesuatu tentang foto Anda">
                </textarea>
                <input type="text" 
                style="display:block; margin-top:20px; width:200px; height: 30px; padding-left: 5px;" 
                id="locationInput" 
                required name="destination"
                placeholder="Tambahkan Tag Lokasi" class="bi bi-search">
                <input type="hidden" id="destinationId" required name="destinationId" value="">
            </div>
            <button type="submit" style="display:block; margin-top:20px" class="submitBtn">Submit</button>
            </form>
        </div>
        </div>

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

<script>
    document.getElementById("openModalBtn").addEventListener("click", function() {
    document.getElementById("modal").style.display = "block";
    });

    document.getElementById("closeModalBtn").addEventListener("click", function() {
    document.getElementById("modal").style.display = "none";
    });

    document.getElementById("imageInput").addEventListener("change", function() {
    const imageInfo = document.getElementById("imageInfo");
    if (this.files && this.files[0]) {
        imageInfo.classList.add("active");
    } else {
        imageInfo.classList.remove("active");
    }
    });

    document.querySelector("form").addEventListener("submit", function(event) {
    event.preventDefault();
    const imageFile = document.getElementById("imageInput").files[0];
    const caption = document.getElementById("captionInput").value;
    const location = document.getElementById("locationInput").value;

    // Lakukan pengolahan data gambar, keterangan, dan lokasi sesuai kebutuhan

    // Setelah selesai, tutup modal
    document.getElementById("modal").style.display = "none";
    });
</script>

<script>
$(document).ready(function() {
$('#locationInput').autocomplete({ //id input destinasi
    source: function(request, response) {
        $.ajax({
            url: '{{ route('search') }}', //url untuk controller pencari destinasi
            method: 'GET',
            data: {
                _token: '{{ csrf_token() }}',
                query: request.term
            },
            dataType: 'json',
            success: function(data) {
                response(data);
            }
        });
    },
    minLength: 1, // Atur jumlah karakter minimal sebelum live search dimulai
    select: function(event, ui) {
        $('#locationInput').val(ui.item.destination_name); // id input destinasi
        $('#destinationId').val(ui.item.id); // Menyimpan id destinasi yang dipilih pada input tersembunyi
        return false;
    }
}).data("ui-autocomplete")._renderItem = function(ul, item) {
    return $("<li>")
        .append("<div>" + item.destination_name + "</div>")
        .appendTo(ul);
}.bind(this);

    $('#searchForm').on('submit', function() {
    var selectedDestinationId = $('#destinationId').val();
    $('#destinationId').val(selectedDestinationId);
});
});

</script>

    <script src="{{asset('/js/profile.js')}}"></script>
</body>

</html>