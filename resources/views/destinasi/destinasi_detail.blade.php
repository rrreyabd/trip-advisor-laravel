<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
    <link rel="stylesheet" href="{{ asset('css/destinasi.css') }}">

    {{-- NAV N KATEGORI --}}
    <link rel="stylesheet" href="{{ asset('./css/detail_hotel.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/nav.css') }}">
    <link rel="icon" href="{{ asset('./img/Tripadvisor_logoset_solid_green.svg') }}">
    <link rel="icon" href="{{ asset('./img/Tripadvisor_logoset_solid_green.svg') }}">

    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>
</head>
<body>

    {{-- NAVBAR START --}}
    <div class="nav center">
        <div class="nA">
            <div class="nAa">
                <a href="{{ route('index') }}">
                    <img width="190px" height="54px" src="{{ asset('./img/Logo.svg') }}" alt="">
                </a>

                <form action="" class="center">
                    <input type="text">
                    <button type="submit">
                        <i class="fa fa-search d-inline-flex align-items-center"></i>
                    </button>
                </form>
            </div>

            <div class="nAb center">
              
              <div class="d-inline-flex align-items-center mt-2">
                      <a href="{{route('ulas')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                            <path d="M13.5 6.5l4 4"></path>
                        </svg>
                        <p class="bold d-inline-flex">Ulas</p>
                      </a>
                    </div>
                
                    <div class="trip d-inline-flex align-items-center mt-2">
                      <a href="{{route('trip', ['id' => Auth::user->id, 'type' => 'all'])}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                        </svg>
                        <p class="bold d-inline-flex">Trip</p>
                      </a>
                    </div>
                
                    <div class="masuk d-inline-flex align-items-center mt-2">
                      <a href="masuk">
                        <p class="bold d-inline-flex">Masuk</p>
                      </a>
                    </div>
                
            </div>

        </div>
    </div>
    </div>
    {{-- NAVBAR END --}}

    {{-- KATEGORI START --}}
    <div class="container">
      <div class="row">
      <div class="kAa col mt-2 mb-2">
                  <li>
                      <a href="{{ route('hotel') }}">Hotel</a>
                  </li>
                  <li>
                      <a href="{{ route('destinasi') }}">Hal yang dapat dilakukan</a>
                  </li>
                  <li>
                      <a href="{{ route('restoran') }}">Restoran</a>
                  </li>
                  <li>
                      <a href="{{ route('forum') }}">Forum</a>
                  </li>
              </ul>                
      </div>
      </div>
      <div class="row">
          <hr style="width:100vw; position:absolute;left:0;">
      </div>
  </div>
    {{-- KATEGORI END --}}
    <div class="container">
    @if(session('update_favorite'))
    <div class="alert alert-warning alert-dismissible fade show w-100" style="margin-top:10px;margin-bottom:0px;" role="alert">
        <strong>Berhasil Ditambahkan ke Favorit!</strong>
        <button type="button" class="bi bi-x-circle btn alert-close" style="font-size:30px; margin-bottom:20px;" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @elseif(session('delete_favorite'))
    <div class="alert alert-warning alert-dismissible fade show w-100" style="margin-top:10px;margin-bottom:0px;" role="alert">
        <strong>Berhasil Dihapus dari Favorit!</strong>
        <button type="button" class="bi bi-x-circle btn alert-close" style="font-size:30px; margin-bottom:20px;" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    </div>

    <!-- HEADER START -->
    <section class="headerSection">
      <div class="container">
        <header>
            <div class="topHeader mb-3 mt-4">
                <div class="topLeftHeader">
                    <h1>{{ $wisata->destination_name }}</h1>
                </div>
            

                <div class="topRightHeader">
                  <div class="ulas center mt-2">
                        <a href="{{ route('ulasan', ['id'=>$wisata->id])}}"
                           style="color:black; text-decoration:none" 
                          class="d-inline-flex rounded-pill">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                              <path d="M13.5 6.5l4 4"></paheartth>
                          </svg>
                          <span class="bold d-flex align-items-center">Ulas </span> 
                        </a>
                  </div>

                  <div class="d-inline-flex ms-2 me-2 fs-3 adj-link"> |</div>
                    

                  <div class="trip center mt-2">
                    <form action="{{ route('addFav', ['destinationId'=>$wisata->id])}}" method="POST">
                      @csrf <!-- Laravel CSRF protection -->
                      <input type="hidden" name="destination_id" value="{{ $wisata->id }}">
                      <button type="submit" href="{{ route('favorite', ['id'=>3])}}" class="transparent-button rounded-pill d-inline-flex" style="margin-top:8px; color:black;text-decoration:none">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart d-inline-flex align-items-center" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                          </svg>
                            {{-- <button type="submit">Favorite</button> --}}
                          <span class="bold d-flex align-items-center">Simpan</span>
                      </button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="midHeader mt-2">
                <a href="#ulasan" class="no-underline ">
                    @for($i=0; $i < $wisata->rating->value; $i++)
                    <i class="bi bi-circle-fill text-success me-1"></i>
                    @endfor
                    @for($i=0; $i < 5 - $wisata->rating->value; $i++)
                    <i class="bi bi-circle me-1"></i>
                    @endfor
                    <p class="bold b-underline ms-2">
                      @php $i=0 @endphp 
                      @foreach($comments as $comment)
                          @if($comment->destination->id == $wisata->id)
                              @php $i++ @endphp 
                          @endif
                      @endforeach
                      {{ $i }} ulasan
                    </p>
                    <p class="">&nbsp; | </p>
                    <p class="b-underline ms-2"><b>#1</b> dari 40 Hotel di Sumatera Utara</p>
                </a>
            </div>

            <div class="bottomHeader mt-2 mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor"></path>
                 </svg>
                 <a href="" class="b-underline ms-1">{{ $wisata->address }}</a>
                 <p class="mt-3">&nbsp; | &nbsp;</p>

                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                 </svg>
                 <a href="tel:+1234567890" class="b-underline ms-1">{{ $wisata->contact }}</a>
                 <p class="mt-3">&nbsp; | &nbsp;</p>

                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-laptop" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M3 19l18 0"></path>
                    <path d="M5 6m0 1a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v8a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1z"></path>
                 </svg>
                 <a href="{{ $wisata->website }}" class="b-underline ms-1">Situs Web</a>
                 <p class="mt-3">&nbsp; | &nbsp;</p>
            </div>
        </header>
      </div>
    </section>
    <!--HEADER END-->
    
    <!-- DETAIL WISATA START -->
     <section id="card">
        <div class="container">
            <div class="row d-flex justify-content-center">
                  <!-- BAGIAN FOTO DETAIL ATRAKSI -->
                  <div class="col-md-7 col-12 mt-3">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          @php $i=1 @endphp
                          @foreach($comments as $comment)
                          @foreach($comment->comment_photo as $photo)
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}" aria-label="Slide {{ $i+1 }}"></button>
                          @php $i++ @endphp
                          @endforeach
                          @endforeach
                        </div>
                        <div class="carousel-inner mb-3" style="border-radius: 4px;">
                          <div class="carousel-item active">
                            <img src="{{ asset('img/wisata/' . $wisata->photo) }}" class="d-inline-flex w-100" alt="..." style="width: 400px; height: 400px; object-fit:cover">
                          </div>
                          {{-- @foreach ($data as $item) --}}
                          @foreach ($comments as $comment)
                          @foreach($comment->comment_photo as $photo)
                          <div class="carousel-item">
                              <img src="{{ asset('img/foto_ulas/' . $photo->comment_photo ) }}" class="d-inline-flex w-100" alt="..." style="width: 400px; height: 400px; object-fit:cover">
                          </div>
                          @endforeach
                          @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="ccp btn btn-dark btn-sm rounded-pill" aria-hidden="true"><i class="bi bi-arrow-left-short fs-1 d-flex align-items-center"></i></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="ccn btn btn-dark btn-sm rounded-pill" aria-hidden="true" ><i class="bi bi-arrow-right-short fs-1 d-flex align-items-center"></i></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                        <a href="" class="posbutton d-inline-flex btn-sm btn btn-dark rounded-pill">
                            <span class="bi bi-image me-2"></span>Semua Foto
                        </a>
                      </div>
                  </div>
            </div>
        </div>
    </section>
    <!-- DETAIL WISATA END -->

    {{-- GOOGLE API START--}}
    <div class="container shadow-sm card mb-3">
      <div class="row">
        <div class="col mb-3">
          <span class="fw-bold fs-2 d-flex justify-content-center">Lokasi</span>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center mb-4">
          <iframe src="{{ $wisata->map }}""
          width="1200" height="250" style="border:0; object-fit:cover"
          class="d-flex justify-content-center"
          allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
    {{-- GOOGLE API END --}}

     {{-- <!-- FILTER START -->
      <section class="filter">
        <div class="container mt-3 shadow" style="border-radius: 10px">
          <div class="row" style="border-radius: 3px">
            <div class="col-md-8 col-6">
              <h3 class="mt-3">Ulasan</h3>
            </div>
            <div class="col-md-4 col-6 d-flex justify-content-end d-flex align-items-center">
              <button class="btn-sm btn btn-dark" style="height: 40px">Tulis Ulasan</button>
              <div class="dropdown ms-2 d-flex align-items-center">
                <button class="bt-sm btn btn-dark dropdown-toggle" style="height: 40px" type="button" data-bs-toggle="dropdown" data-bs-target="#dropdown-menu" aria-expanded="false"></button>
                <ul class="dropdown-menu" id="dropdown-menu">
                  <li><a class="dropdown-item bi bi-pencil-square" style="font-weight: 500" href="#">&nbsp;Tulis Ulasan</a></li>
                  <hr style="margin: 0; padding: 0" />
                  <li><a class="dropdown-item bi bi-camera" style="font-weight: 500" href="#">&nbsp;Upload Foto</a></li>
                  <hr style="margin: 0; padding: 0" />
                  <li><a class="dropdown-item bi bi-chat-left-text" style="font-weight: 500" href="#">&nbsp;Ajukan Pertanyaan</a></li>
                  <hr style="margin: 0; padding: 0" />
                </ul>
              </div>
            </div>
          </div>
          <hr class="mt-1" />
  
          <form action="" method="POST">
            <div class="row">
              <div class="col-md-4 col-lg-3 col-12">
                <p class="mt-2" style="font-size: medium; font-weight: 500; margin-bottom: 10px">Peringkat dari wisatawan</p>
                <table class="">
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="luarbiasa" id="luarbiasa" />
                      <label for="luarbiasa" class="ms-2">Luar Biasa</label>
                    </td>
                    <td>
                      <span class="text-secondary ms-2">(20)</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="sangatbagus" id="sangatbagus" />
                      <label for="sangatbagus" class="ms-2">Sangat Bagus</label>
                    </td>
                    <td>
                      <span class="text-secondary ms-2">(20)</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="ratarata" id="ratarata" />
                      <label for="ratarata" class="ms-2">Rata-rata</label>
                    </td>
                    <td>
                      <span class="text-secondary ms-2">(20)</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="buruk" id="buruk" />
                      <label for="buruk" class="ms-2">Buruk</label>
                    </td>
                    <td>
                      <span class="text-secondary ms-2">(20)</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="sangatburuk" id="sangatburuk" />
                      <label for="sangatburuk" class="ms-2">Sangat Buruk</label>
                    </td>
                    <td>
                      <span class="text-secondary ms-2">(20)</span>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="hidefilter col-2">
                <p class="mt-2" style="font-size: medium; font-weight: 500; margin-bottom: 10px">Bulan Tertentu</p>
                <table>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="mar_mei" id="mar_mei" />
                      <label for="mar_mei" class="ms-2">Mar-Mei</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="jun_agu" id="jun_agu" />
                      <label for="jun_agu" class="ms-2">Jun-Agu</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="sep_nov" id="sep_nov" />
                      <label for="sep_nov" class="ms-2">Sep-Nov</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="des_feb" id="des_feb" />
                      <label for="des_feb" class="ms-2">Des-Feb</label>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="hidefilter col-2">
                <p class="mt-2" style="font-size: medium; font-weight: 500; margin-bottom: 10px">Jenis Wisatawan</p>
                <table>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="keluarga" id="keluarga" />
                      <label for="keluarga" class="ms-2">Keluarga</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="pasangan" id="pasangan" />
                      <label for="pasangan" class="ms-2">Pasangan</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="sendiri" id="sendiri" />
                      <label for="sendiri" class="ms-2">Sendiri</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="bisnis" id="bisnis" />
                      <label for="bisnis" class="ms-2">Bisnis</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center mb-3">
                      <input type="checkbox" style="height: 17px; width: 17px" name="teman" id="teman" />
                      <label for="teman" class="ms-2">Teman</label>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="hidefilter col-3">
                <p class="mt-2" style="font-size: medium; font-weight: 500; margin-bottom: 10px">Bahasa</p>
                <table>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="radio" style="height: 17px; width: 17px" name="bahasa" id="indonesia" />
                      <label for="indonesia" class="ms-2">Indonesia</label>
                    </td>
                    <td>
                      <span class="text-secondary ms-2">(500)</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="radio" style="height: 17px; width: 17px" name="bahasa" id="inggris" />
                      <label for="inggris" class="ms-2">Inggris</label>
                    </td>
                    <td>
                      <span class="text-secondary ms-2">(20)</span>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </form>
        </div>

         {{-- <!-- fitur pencarian -->
        <div class="container">
          <div class="row mt-3">
            <div class="col-md-12 col-12 input-group mb-3">
              <button class="btn btn-outline-dark bi bi-search" type="button" id="button-addon1"></button>
              <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" />
            </div>
          </div>
        </div>
      </section> --}}
    <!-- FILTER END -->

    {{-- <!-- ULASAN START -->
    <section>
      @foreach($comments as $comment)
      <div class="container shadow" style="margin-top: 20px; border-radius: 10px">
      <div class="row">
        <div class="col-md-auto ms-2 mt-2 mb-2 d-inline-flex">
          <img class="rounded-pill" src="{{ asset('img/profile.png') }}" alt="profile" style="width: 50px" />
        </div>
        <div class="col-auto mt-2 mb-2 d-flex align-items-center flex-wrap" style="font-size">
          <span for="name" style="font-weight: 500">{{ $comment->user->username }}</span>&nbsp; <span for="date">&nbsp;({{ date('M Y',strtotime($comment->upload_date)) }})</span>
           <div class="text-secondary d-block flex-basis-100 w-100">1 kontribusi</div> 
        </div>
        <div class="dropdown col-xl-8 col-lg-6 col-md-4 col-sm-3 col-2 d-inline-flex justify-content-end">
          <button class="btn btn-transparent bi bi-three-dots fs-2" style="border-width: 0" type="button" data-bs-toggle="dropdown" data-bs-target="#dropdown-menu" aria-expanded="false"></button>
          <ul class="dropdown-menu" id="dropdown-menu">
            <li><a href="#" class="dropdown-item">Laporkan</a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 me-2 ms-2 mt-2">
          <div style="margin: 0">
            @for($i=0; $i < $wisata->rating->value; $i++)
            <i class="bi bi-circle-fill text-success"></i>
            @endfor
            @for($i=0; $i < 5 - $wisata->rating->value; $i++)
            <i class="bi bi-circle"></i>
            @endfor
            <div for="judul" class="mt-2" style="font-weight: 450">{{ $comment->title }}</div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="mt-2 col-md-12 me-2 ms-2 mb-3">
          <p class="card-to" style="margin: 0">
            {{ $comment->content }}
          </p>
          <button class="rounded-pill bg-transparent" style="border-width: 0; text-decoration: underline" onclick="toggleCardTo(this)">Selengkapnya</button>
        </div>
        <div class="col me-2 ms-2 mb-3"><span style="font-weight: 800;">Ditulis: </span>{{ date('d M Y',strtotime($comment->upload_date)) }}</div>

        <div class="ms-2 mt-3">
          @foreach($comment->comment_photo as $photo)
          <img src="{{ asset('img/foto_ulas/' . $photo->comment_photo) }}" alt="" style="object-fit: cover; height:150px; width: 150px">
          @endforeach
        </div>
        <hr class="mt-4" />

        <i class="text-secondary me-2 ms-2 mb-3" style="font-size: small"> Ulasan ini adalah opini subjektif dari anggota Tripadvisor, bukan dari Tripadvisor LLC. Tripadvisor melakukan pemeriksaan terhadap ulasan. </i>
      </div>
    </div>
    <div class="mb-3"></div>
    @endforeach
  </section>
    <!-- ULASAN END --> --}}
    <!-- function text overflow -->
    {{-- <script>
      function toggleCardTo(button) {
        var cardTo = button.parentNode.querySelector(".card-to");
        cardTo.classList.toggle("full");
        if (cardTo.classList.contains("full")) {
          button.textContent = "Baca Lebih Sedikit";
        } else {
          button.textContent = "Selengkapnya";
        }
      }
    </script>  --}}

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

    {{-- NAV --}}
    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>


</body>
</html>