<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ulasan</title>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
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
            <a href="{{ route('tulis_ulasan')}}" class="btn-sm btn btn-dark" style="height: 40px">Tulis Ulasan</a>
            <div class="dropdown ms-2 d-flex align-items-center">
              <ul class="dropdown-menu" id="dropdown-menu">
                <li><a class="dropdown-item bi bi-pencil-square" style="font-weight: 500" href="#">&nbsp;Tulis Ulasan</a></li>
                <hr style="margin: 0; padding: 0" />
                <li><a class="dropdown-item bi bi-camera" style="font-weight: 500" href="#">&nbsp;Upload Foto</a></li>
                <hr style="margin: 0; padding: 0" />
                <li><a class="dropdown-item bi bi-chat-left-text" style="font-weight: 500" href="#">&nbsp;Tulis Ajukan Pertanyaan</a></li>
                <hr style="margin: 0; padding: 0" />
              </ul>
            </div>
          </div>
        </div>
        <hr class="mt-1" />

      </div>

    @for ($i = 0; $i < 5; $i++)
    <!-- ULASAN START -->
    <div class="container shadow" style="margin-top: 20px; border-radius: 10px">
      <div class="row">
        <div class="col-md-auto ms-2 mt-2 mb-2 d-inline-flex">
          <img class="rounded-pill" src="img/profile.webp" alt="profile" style="width: 50px" />
        </div>
        <div class="col-auto mt-2 mb-2 d-flex align-items-center flex-wrap" style="font-size: small">
          <span for="name" style="font-weight: 500">Julyant Anggara</span>&nbsp; <span for="date">&nbsp;(Mei 2023)</span>
          <div class="text-secondary d-block flex-basis-100 w-100">1 kontribusi</div>
        </div>
        <div class="dropdown col-xl-7 col-lg-6 col-md-4 col-sm-3 col-2 d-inline-flex justify-content-end">
          <button class="btn btn-transparent bi bi-three-dots fs-2" style="border-width: 0" type="button" data-bs-toggle="dropdown" data-bs-target="#dropdown-menu" aria-expanded="false"></button>
          <ul class="dropdown-menu" id="dropdown-menu">
            <li><a href="" class="dropdown-item">Laporkan</a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 me-2 ms-2 mt-2">
          <div style="margin: 0">
            <span class="bi bi-circle-fill text-success"></span>
            <span class="bi bi-circle-fill text-success"></span>
            <span class="bi bi-circle-fill text-success"></span>
            <span class="bi bi-circle-fill text-success"></span>
            <span class="bi bi-circle-half text-success"></span>
            <div for="judul" style="font-weight: 450">Liburan</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 me-2 ms-2 mb-3">
          <p class="card-to" style="margin: 0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore expedita quis quae maxime ab blanditiis, totam provident nobis distinctio aut. Incidunt dolorem nostrum eligendi itaque, earum quam sint perspiciatis aliquam vel
            laudantium velit fuga? Aspernatur distinctio a unde id eaque. Harum quaerat nisi accusantium deleniti. Debitis repellat voluptas, modi vitae minima ullam excepturi sint, quibusdam cumque sequi minus laborum quia, doloribus rerum
            est pariatur ad recusandae asperiores sapiente perferendis aspernatur repellendus dolores vel totam? Unde voluptate beatae asperiores rerum nisi illum provident voluptatibus, hic nesciunt recusandae molestias non deserunt.
            Assumenda praesentium vitae hic quos sint repellat minus veritatis obcaecati nihil!
          </p>
          {{-- <button class="rounded-pill bg-transparent" style="border-width: 0; text-decoration: underline" onclick="toggleCardTo(this)">Selengkapnya</button> --}}
        </div>
        <div class="col me-2 ms-2"><span style="font-weight: 500">Tanggal Menginap: </span>9 Mei 2023</div>

        <hr class="mt-4" />

        <i class="text-secondary me-2 ms-2" style="font-size: small"> Ulasan ini adalah opini subjektif dari anggota Tripadvisor, bukan dari Tripadvisor LLC. Tripadvisor melakukan pemeriksaan terhadap ulasan. </i>

        <div class="row mt-3 mb-3">
          <div class="col-md-auto col-3">
            <button class="btn btn-outline-transparent bi bi-hand-thumbs-up rounded-pill">Bermanfaat</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ULASAN END -->
    @endfor

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

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
    </script> --}}
  </body>
</html>
