<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{asset('img/Tripadvisor_logoset_solid_green.svg')}}">
    <title>Ulasan</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/destinasi.css') }}" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  </head>
  <body>
      <a href="{{route('index')}}" class="text-dark no-underline">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M5 12l14 0"></path>
          <path d="M5 12l6 6"></path>
          <path d="M5 12l6 -6"></path>
        </svg>
      </a>
  
       <!-- FILTER START -->
       <section class="filter">
        <div class="container mt-3 shadow" style="border-radius: 10px">
          <div class="row" style="border-radius: 3px">
            <div class="col-md-8 col-6">
              <h3 class="mt-3">Ulasan</h3>
            </div>
            <div class="col-md-4 col-6 d-flex justify-content-end d-flex align-items-center">
              <a href="{{ route('tulis_ulasan', ['id' => $id]) }}"class="btn-sm btn btn-dark d-flex align-items-center" style="height: 40px">Tulis Ulasan</a>
              <div class="dropdown ms-2 d-flex align-items-center">
                {{-- <button class="bt-sm btn btn-dark dropdown-toggle" style="height: 40px" type="button" data-bs-toggle="dropdown" data-bs-target="#dropdown-menu" aria-expanded="false"></button>
                <ul class="dropdown-menu" id="dropdown-menu">
                  <li><a class="dropdown-item bi bi-pencil-square" style="font-weight: 500" href="{{ route('tulis_ulasan', ['id' => $id]) }}">&nbsp;Tulis Ulasan</a></li>
                  <hr style="margin: 0; padding: 0" />
                  <li><a class="dropdown-item bi bi-camera" style="font-weight: 500" href="#">&nbsp;Upload Foto</a></li>
                  <hr style="margin: 0; padding: 0" />
                  <li><a class="dropdown-item bi bi-chat-left-text" style="font-weight: 500" href="#">&nbsp;Ajukan Pertanyaan</a></li>
                  <hr style="margin: 0; padding: 0" />
                </ul> --}}
              </div>
            </div>
          </div>
          <hr class="mt-1" />
  
          <form action="{{route('ulasan-filter', ['id' => $id ])}}" method="GET">
            <div class="row">
              <div class="col-md-4 col-lg-3 col-12">
                <p class="mt-2" style="font-size: medium; font-weight: 500; margin-bottom: 10px">Peringkat dari wisatawan</p>
                <table class="">
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="rating_id[]" id="luarbiasa" value="5" />
                      <label for="luarbiasa" class="ms-2">Luar Biasa</label>
                    </td>
                    <td>
                      <span class="text-secondary ms-2">({{$lima}})</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="rating_id[]" id="sangatbagus" value="4" />
                      <label for="sangatbagus" class="ms-2">Sangat Bagus</label>
                    </td>
                    <td>
                      <span class="text-secondary ms-2">({{$empat}})</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="rating_id[]" id="ratarata" value="3" />
                      <label for="ratarata" class="ms-2">Rata-rata</label>
                    </td>
                    <td>
                      <span class="text-secondary ms-2">({{$tiga}})</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="rating_id[]" id="buruk" value="2" />
                      <label for="buruk" class="ms-2">Buruk</label>
                    </td>
                    <td>
                      <span class="text-secondary ms-2">({{$dua}})</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="rating_id[]" id="sangatburuk" value="1" />
                      <label for="sangatburuk" class="ms-2">Sangat Buruk</label>
                    </td>
                    <td>
                      <span class="text-secondary ms-2">({{$satu}})</span>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="hidefilter col-2">
                <p class="mt-2" style="font-size: medium; font-weight: 500; margin-bottom: 10px">Bulan Tertentu</p>
                <table>
                  
                    @php
                        $months = [
                            'January', 'February', 'March', 'April', 'May', 'June',
                            'July', 'August', 'September', 'October', 'November', 'December'
                        ];
                    @endphp
                      @foreach ($months as $month)
                        <tr>
                          <td class="d-flex flex align-items-center">
                                <input type="checkbox" name="month[]" value="{{ $month }}">
                                <label>{{ $month }}</label>
                          <td>
                        </tr>
                    @endforeach  
                </table>
              </div>
              <div class="hidefilter col-2">
                <p class="mt-2" style="font-size: medium; font-weight: 500; margin-bottom: 10px">Jenis Wisatawan</p>
                <table>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="visit_type[]" value="Keluarga" />
                      <label for="keluarga" class="ms-2">Keluarga</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="visit_type[]" value="Pasangan" />
                      <label for="pasangan" class="ms-2">Pasangan</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="visit_type[]" value="Sendirian" />
                      <label for="sendiri" class="ms-2">Sendiri</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center">
                      <input type="checkbox" style="height: 17px; width: 17px" name="visit_type[]" value="Bisnis" />
                      <label for="bisnis" class="ms-2">Bisnis</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center mb-3">
                      <input type="checkbox" style="height: 17px; width: 17px" name="visit_type[]" value="Teman" />
                      <label for="teman" class="ms-2">Teman</label>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="w-25 pb-4">
              <button class="btn btn-dark">
                Filter
              </button>
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

    <!-- ULASAN START -->
    <section>
      @foreach($comments as $comment)
      <div class="container shadow" style="margin-top: 20px; border-radius: 10px">
      <div class="row">
        <div class="col-md-auto ms-2 mt-2 mb-2 d-inline-flex">
          <img class="rounded-pill" src="{{ asset('/img/profile_photo/' . $comment->user->profile_photo ) }}" alt="profile" width="50px" height="50px" />
        </div>
        <div class="col-auto mt-2 mb-2 d-flex flex-col align-items-center" style="font-size">
            <p for="name" style="font-weight: 500">{{ $comment->user->firstName }} {{ $comment->user->lastName }}</p>       
          {{-- <div class="text-secondary d-block flex-basis-100 w-100">1 kontribusi</div> --}}
        </div>

        {{-- <div class="dropdown col-xl-8 col-lg-6 col-md-4 col-sm-3 col-2 d-inline-flex justify-content-end">
          <button class="btn btn-transparent bi bi-three-dots fs-2" style="border-width: 0" type="button" data-bs-toggle="dropdown" data-bs-target="#dropdown-menu" aria-expanded="false"></button>
          <ul class="dropdown-menu" id="dropdown-menu">
            <li><a href="#" class="dropdown-item">Laporkan</a></li>
          </ul>
        </div> --}}
      </div>

      <div class="row">
        <div class="col-md-12 me-2 ms-2 mt-2">
          <div style="margin: 0">
            <p for="date">Tanggal pergi : {{ \Carbon\Carbon::parse($comment->date)->formatLocalized('%d %B %Y') }}</p>
            <p>Bersama {{$comment->visit_type}}</p>
            @for($i=0; $i < $comment->rating->value; $i++)
            <i class="bi bi-circle-fill text-success"></i>
            @endfor
            @for($i=0; $i < 5 - $comment->rating->value; $i++)
            <i class="bi bi-circle"></i>
            @endfor
            <div for="judul" class="mt-2" style="font-weight: 450"><h4> {{ $comment->title }} </h4></div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="mt-2 col-md-12 me-2 ms-2 mb-3">
          <p class="card-to me-3" style="margin: 0">
            {{ $comment->content }}
          </p>
          <button class="rounded-pill bg-transparent" style="border-width: 0; text-decoration: underline" onclick="toggleCardTo(this)">Selengkapnya</button>
        </div>
        <div class="col me-2 ms-2 mb-3"><span style="font-weight: 800;">Ditulis: </span>{{ date('d M Y',strtotime($comment->created_at)) }}</div>

        <div class="ms-2 mt-3">
          @foreach ($comment->comment_photo as $comment_photo)
              @if (!empty($comment_photo->photo))
                  <img src="{{ asset('img/ulasan/' . $comment_photo->photo) }}" alt="" style="object-fit: cover; height:150px; width: 150px">
              @endif
          @endforeach
      
        </div>
        <hr class="mt-4" />

        <i class="text-secondary me-2 ms-2 mb-3" style="font-size: small"> Ulasan ini adalah opini subjektif dari anggota Tripadvisor, bukan dari Tripadvisor LLC. Tripadvisor melakukan pemeriksaan terhadap ulasan. </i>
      </div>
    </div>
    <div class="mb-3"></div>
    @endforeach
  </section>
    <!-- ULASAN END -->
    <!-- function text overflow -->
    <script>
      function toggleCardTo(button) {
        var cardTo = button.parentNode.querySelector(".card-to");
        cardTo.classList.toggle("full");
        if (cardTo.classList.contains("full")) {
          button.textContent = "Baca Lebih Sedikit";
        } else {
          button.textContent = "Selengkapnya";
        }
      }
    </script>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

    {{-- NAV --}}
    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>
  </body>
</html>

