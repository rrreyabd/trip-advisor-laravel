<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>

    <link rel="icon" href="./img/Tripadvisor_logoset_solid_green.svg">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">  --}}
    <link rel="stylesheet" href="{{ asset('./css/detail_hotel.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/destinasi.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 


    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('layout.nav')
    @include('layout.kategori')
    <section class="headerSection">

        @if(session('update_favorite'))
        <div class="alert alert-warning alert-dismissible fade show" style="margin-top:10px;margin-bottom:0px;" role="alert">
            <strong>Berhasil Ditambahkan ke Favorit!</strong>
            <button type="button" class="bi bi-x-circle btn alert-close" style="font-size:30px; margin-bottom:20px;" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @elseif(session('delete_favorite'))
        <div class="alert alert-warning alert-dismissible fade show" style="margin-top:10px;margin-bottom:0px;" role="alert">
            <strong>Berhasil Dihapus dari Favorit!</strong>
            <button type="button" class="bi bi-x-circle btn alert-close" style="font-size:30px; margin-bottom:20px;" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <!-- HEADER -->
        <header>
            <div class="topHeader">
                <div class="topLeftHeader">
                    <h1>{{ $hotel->destination_name }}</h1>
                </div>

                <div class="topRightHeader">
                    <a href="{{ route('ulasan', ['id' => $hotel->id])}}">
                        <div class="ulas center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                <path d="M13.5 6.5l4 4"></path>
                            </svg>
                            <p class="bold"> Ulas &nbsp; | &nbsp;</p> 
                        </div>
                    </a>
                    
                    <a href="">
                        <div class="trip center">
                            <form action="{{ route('addFav', ['destinationId'=>$hotel->id])}}" method="POST">
                                @csrf <!-- Laravel CSRF protection -->
                                <input type="hidden" name="destination_id" value="{{ $hotel->id }}">
                                <button type="submit" href="{{ route('favorite', ['id'=>3])}}" class="transparent-button rounded-pill" style="display:inline-flex; align-items:center;color:black;text-decoration:none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart d-inline-flex align-items-center" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                                    </svg>
                                      {{-- <button type="submit">Favorite</button> --}}
                                    <p class="bold" style="display:inline-flex; align-items:center">Simpan</p>
                                </button>
                              </form>
                        </div>
                    </a>
                </div>
            </div>

            <div class="midHeader">
                <a href="#ulasan">
                    {{-- function untuk rating --}}
                    @for($i=0; $i < $hotel->rating->value; $i++)
                        <i class="bi bi-circle-fill text-success" style="margin-right:2px; color:#28a745"></i>
                    @endfor
                    @for($i=0; $i < 5 - $hotel->rating->value; $i++)
                        <i class="bi bi-circle me-1" style="margin-right:2px"></i>
                    @endfor
                    {{-- function untuk menghitung ulasan --}}
                    @php $i=0 @endphp 
                    @foreach($comments as $comment)
                        @if($comment->destination->id == $hotel->id)
                            @php $i++ @endphp 
                        @endif
                    @endforeach 
                    <p>&nbsp; 
                        {{ $i }} ulasan
                    </p>
                    <p>&nbsp; | </p>
                    <p> &nbsp; <b>#1</b> dari 40 Hotel di Sumatera Utara</p>
                </a>
            </div>

            <div class="bottomHeader">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor"></path>
                 </svg>
                 <a href=""> {{ $hotel->address }}</a>
                 <p>&nbsp; | &nbsp;</p>

                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                 </svg>
                 <a href="tel:+1234567890">{{ $hotel->contact }}</a>
                 <p>&nbsp; | &nbsp;</p>

                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-laptop" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M3 19l18 0"></path>
                    <path d="M5 6m0 1a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v8a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1z"></path>
                 </svg>
                 <a href="">{{ $hotel->website }}</a>
                 <p>&nbsp; | &nbsp;</p>
            </div>
        </header>
    </section>
    
    <section class="contentSection">
        <div class="contentContainer">

            <div class="TopContent">
                <div class="penawaran">
                    <div class="PenawaranContainer">
                        <h1 class="bold">Penawaran Harga</h1>

                        @foreach($prices as $price)
                        <div class="mitra">
                            <img src="{{asset('/img/partner/'. $price->partner->photo) }}" height= "43.9875px" width= "97.65px" style="object-fit:contain;" alt="">
                            <p class="bold">{{ $price->price }}</p>
                        </div>
                        @endforeach
                        <a href="">
                            <div class="linkMitra">
                                <p class="large bold">Lihat Penawaran</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="image">
                    <a href="">
                        <img src="{{ asset('/img/hotel/' . $hotel->photo) }}" alt="foto_hotel">
                        @foreach($comments as $comment)
                        @foreach($comment->comment_photo as $photo)
                        <img src="{{ asset('img/foto_ulas/' . $photo->comment_photo) }}" alt="">
                        @endforeach
                        @endforeach
                        <div class="click">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hand-click" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M8 13v-8.5a1.5 1.5 0 0 1 3 0v7.5"></path>
                                <path d="M11 11.5v-2a1.5 1.5 0 0 1 3 0v2.5"></path>
                                <path d="M14 10.5a1.5 1.5 0 0 1 3 0v1.5"></path>
                                <path d="M17 11.5a1.5 1.5 0 0 1 3 0v4.5a6 6 0 0 1 -6 6h-2h.208a6 6 0 0 1 -5.012 -2.7l-.196 -.3c-.312 -.479 -1.407 -2.388 -3.286 -5.728a1.5 1.5 0 0 1 .536 -2.022a1.867 1.867 0 0 1 2.28 .28l1.47 1.47"></path>
                                <path d="M5 3l-1 -1"></path>
                                <path d="M4 7h-1"></path>
                                <path d="M14 3l1 -1"></path>
                                <path d="M15 6h1"></path>
                            </svg>
                            <p class="bold">Lihat semua foto</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="detail">
                <div class="detailContainer">
                    <div class="ulasan">
                        <a href="ulasan">
                            <h2>Penilaian dan ulasan</h2>
                            <div class="rating"  style="align-items:center">
                                <h3>4.0</h3>

                                <div style="display:inline-flex">
                                @for($i=0; $i < $hotel->rating->value; $i++)
                                    <i class="bi bi-circle-fill text-success" style="margin-right:2px; color:#28a745; display:inline-flex"></i>
                                @endfor
                                @for($i=0; $i < 5 - $hotel->rating->value; $i++)
                                    <i class="bi bi-circle me-1" style="margin-right:2px;display: inline-flex"></i>
                                @endfor
                                </div>

                                @php $i=0 @endphp 
                                @foreach($comments as $comment)
                                    @if($comment->destination->id == $hotel->id)
                                        @php $i++ @endphp 
                                    @endif
                                @endforeach 
                                <h3>&nbsp; 
                                    {{ $i }} ulasan
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="detailContainer">
                    <h2>Fasilitas</h2>
                    @foreach($features as $feature)
                    {{-- @dd($feature) --}}
                    <p class="bold">{{ $feature->feature->feature_detail}}</p>
                    @endforeach
                    
                </div>

                <div class="detailContainer">
                    <h2>Lokasi</h2>
                    <iframe src="{{ $hotel->map }}" width="344" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    
                    
                    <div class="link">
                        <a href="">
                            
                        </a>
                        
                        <a href="">
                            
                        </a>
                        
                        <a href="">
                            
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layout.footer');
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>