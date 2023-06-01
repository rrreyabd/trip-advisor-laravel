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

    <!-- ULASAN START -->
    <section>
      @foreach($comments as $comment)
      <div class="container shadow" style="margin-top: 20px; border-radius: 10px">
      <div class="row">
        <div class="col-md-auto ms-2 mt-2 mb-2 d-inline-flex">
          <img class="rounded-pill" src="{{ asset('img/profile.png') }}" alt="profile" style="width: 50px" />
        </div>
        <div class="col-auto mt-2 mb-2 d-flex align-items-center flex-wrap" style="font-size">
          <span for="name" style="font-weight: 500">{{ $comment->user->username }}</span>&nbsp; <span for="date">&nbsp;({{ date('M Y',strtotime($comment->upload_date)) }})</span>
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
            @for($i=0; $i < $comment->rating->value; $i++)
            <i class="bi bi-circle-fill text-success"></i>
            @endfor
            @for($i=0; $i < 5 - $comment->rating->value; $i++)
            <i class="bi bi-circle"></i>
            @endfor
            <div for="judul" class="mt-2" style="font-weight: 450">{{ $comment->title }}</div>
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
        <div class="col me-2 ms-2 mb-3"><span style="font-weight: 800;">Ditulis: </span>{{ date('d M Y',strtotime($comment->upload_date)) }}</div>

        <div class="ms-2 mt-3">
          @foreach($comment->comment_photo as $photo)
          <img src="{{ asset('img/ulasan/' . $photo->comment_photo) }}" alt="" style="object-fit: cover; height:150px; width: 150px">
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

