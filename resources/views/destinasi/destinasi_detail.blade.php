<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/destinasi.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">  

</head>
<body>
      <!-- AD START -->
    <div class="container">
        <div class="ad row">
            <div class="d-flex justify-content-end">
                <img class="" src="img/ads.jpg" width="1200"alt="ads">
            </div>
        </div>
    </div>
    <!-- AD END -->
    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <img src="img/TripAdvisor_Logo.svg.png" width="20%" class="me-3" alt="tripadvisor">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse row" id="navbarSupportedContent">
            <form class="d-flex col-12 col-lg-6 mt-2" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navIcon navbar-nav me-auto col-lg-6 align-items-center justify-content-end order-lg-2">
              <li class="nav-item mt-1">
                <a class="btn btn-sm bi bi-pen text-black rounded-pill" aria-current="ulas" href="ulas"> Ulas</a>
              </li>
              <li class="nav-item mt-1">
                <a class="btn btn-sm bi bi-heart text-black rounded-pill" aria-current="trip" href="trip"> Trip</a>
              </li>
              <li class="nav-item mt-1">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="img/profile.webp" class="rounded-pill" width="40" height="40" alt="">
                </a>
                <ul class="dropdown-menu dropdown-menu-end text-start">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- NAVBAR END -->
      
    <!-- BREADCRUMBS START -->
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-8 mt-2">
            {{-- <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb hidebcrumb">
                <li class="breadcrumb-item"><a class="bcrumb text-black" href="#">Sumatra</a></li>
                <li class="breadcrumb-item"><a class="bcrumb text-black" href="#">Sumatera Utara</a></li>
                <li class="breadcrumb-item"><a class="bcrumb text-black" href="#">Medan</a></li>
                <li class="breadcrumb-item"><a class="bcrumb text-black" href="#">Lihat semua hal yang dapat dilakukan</a></li>
                <li class="breadcrumb-item active text-black" aria-current="page">Library</li>
                </ol>
            </nav> --}}
        </div>
        <div class="col-md col-4 mt-1 d-flex justify-content-end hidebutton">
           <button class="btn btn-lg btn-outline-light rounded-pill"><i class="bi bi-box-arrow-up text-black fw-bold"></i></button> <!-- THIS IS FOR 2 BUTTONS WITH FEATURES TO SHARE AND MAKE REVIEW -->
           <button class="btn btn-lg btn-outline-light rounded-pill"><i class="bi bi-heart text-black fw-bold"></i></button> <!-- THIS IS FOR 2 BUTTONS WITH FEATURES TO SHARE AND MAKE REVIEW -->
        </div>
        </div>
    </div>
    <!-- BREADCRUMBS END -->

    <!-- MAIN TITLE START -->
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2 class="fw-bold fs-12">Graha Bunda Maria Annai Velangkanni</h2>
            </div>
            <div class="bmain col-lg-3 col-3 d-flex justify-content-end">
                <a href="#" class="btn me-2 btn-md btn-outline-dark rounded-pill bi bi-box-arrow-up text-black m-3 " style="border-width: 2px;"></a> <!-- THIS IS FOR 2 BUTTONS WITH FEATURES TO SHARE AND MAKE REVIEW -->
                <a href="#" class="btn btn-md btn-outline-dark rounded-pill bi bi-heart text-black m-3 d-flex align-items-center" style="border-width: 2px"></a>
            </div>
        </div>
        <div class="row d-flex mt-2">
            <div class="col-md-auto col-12 ">
                    <i class="bi bi-circle-fill text-success" style="margin-right: 0.5px"></i>
                    <i class="bi bi-circle-fill text-success" style="margin-right: 0.5px"></i>
                    <i class="bi bi-circle-fill text-success" style="margin-right: 0.5px"></i>
                    <i class="bi bi-circle-fill text-success" style="margin-right: 0.5px"></i>
                    <i class="bi bi-circle-half text-success" style="margin-right: 0.5px"></i>
                    <a class="adj-link ms-2" href="#">250 ulasan</a>
            </div>
            <div class="col-md-auto col-12 d-flex">
                <a href="" class="adj-link">#1 dari 50 hal yang dapat dilakukan di Medan</a>
            </div>
            <div class="col-md-4 col-12 d-flex">
                <p style="margin:0">Tempat Keagamaan</p>
            </div>
        <div class="row">
            <div class="col-md-12 mt-3 mb-4">
                <a href="#" class="adj-link text-black me-2" style="text-decoration: underline;">Kunjungi situs web<i class="bi bi-arrow-up-short"></i></a>
                <a href="#" class="adj-link text-black me-2" style="text-decoration: underline;">Hubungi</a>
                <a href="#" class="adj-link text-black me-2" style="text-decoration: underline;">Tulisan</a>
            </div>
        </div>
    </div>
    <!-- MAIN TITLE END -->

    <!-- DETAIL WISATA START -->
    <section id="card">
        <div class="container">
            <div class="row center">
                <!-- COLUMN 1 -->
                {{-- <div class="hidecard col-md-5 col-5 card shadow">
                    <div class="card-title mt-2 ms-2 me-2">
                    <div class="card-text mt-4">
                        <h5 class="fw-bold">Komentar Pengguna</h5>
                    </div>
                    </div>
                    <div class="me-2 ms-2 mt-2" style="font-size: small;">
                        <div class="col">
                            <img src="img/profile.webp" class="rounded-pill" width="25px " alt="">
                            <span><a href="" class="adj-link">Oleh Raihan Abdillah</a></span>
                        </div>
                        <div class="col mt-2 adj-link">
                            <a href="" class="adj-link">"Gedung yang cantik."</a>
                        </div>
                        <div class="mt-2">
                            <i class="bi bi-circle-fill text-success" style="margin-right: 1.5px"></i>
                            <i class="bi bi-circle-fill text-success" style="margin-right: 1.5px"></i>
                            <i class="bi bi-circle-fill text-success" style="margin-right: 1.5px"></i>
                            <i class="bi bi-circle-fill text-success" style="margin-right: 1.5px"></i>
                            <i class="bi bi-circle-half text-success" style="margin-right: 1.5px"></i>
                            <span class="ms-2"><a href="" class="adj-link">Des 2021</a></span>
                        </div>
                        <div>
                            <a href=""class="card-to adj-link">Kami mengunjungi gedung ini karena kecantikan arsitekturnya. Sangat Cantik dan menarik.</a>
                        </div>
                        <div class="col mt-2">
                            <img src="img/profile.webp" class="rounded-pill" width="25px " alt="">
                            <span><a href="" class="adj-link">Oleh Julyant Anggara</a></span>
                        </div>
                        <div class="col mt-2 adj-link">
                            <a href="" class="adj-link">"Recommended."</a>
                        </div>
                        <div class="mt-2">
                            <i class="bi bi-circle-fill text-success" style="margin-right: 1.5px"></i>
                            <i class="bi bi-circle-fill text-success" style="margin-right: 1.5px"></i>
                            <i class="bi bi-circle-fill text-success" style="margin-right: 1.5px"></i>
                            <i class="bi bi-circle-fill text-success" style="margin-right: 1.5px"></i>
                            <i class="bi bi-circle-half text-success" style="margin-right: 1.5px"></i>
                            <span class="ms-2"><a href="" class="adj-link">Des 2022</a></span>
                        </div>
                        <div class="col mt-2">
                            <img src="img/profile.webp" class="rounded-pill" width="25px " alt="">
                            <span><a href="" class="adj-link">Oleh Julyant Anggara</a></span>
                        </div>
                        <div class="col mt-2 adj-link">
                            <a href="" class="adj-link">"Recommended."</a>
                        </div>
                        <div class="mt-2">
                            <i class="bi bi-circle-fill text-success" style="margin-right: 1.5px"></i>
                            <i class="bi bi-circle-fill text-success" style="margin-right: 1.5px"></i>
                            <i class="bi bi-circle-fill text-success" style="margin-right: 1.5px"></i>
                            <i class="bi bi-circle-fill text-success" style="margin-right: 1.5px"></i>
                            <i class="bi bi-circle-half text-success" style="margin-right: 1.5px"></i>
                            <span class="ms-2"><a href="" class="adj-link">Des 2022</a></span>
                        </div>
                        <div>
                            <a href=""class="card-to adj-link">Kami mengunjungi gedung ini karena kecantikan arsitekturnya. Sangat Cantik dan menarik.</a>
                        </div>
                    </div>
                    <hr>
                    <div class="card-text mb-2 d-flex justify-content-center text-body-secondary">
                      <a href="" class="btn-sm btn btn-outline-dark rounded-pill" style="border-width: 2px; max-height: 35px;">Lihat Ulasan</a>
                    </div>
                  </div> --}}
                  <!-- BAGIAN FOTO DETAIL ATRAKSI -->
                  <div class="col-md-7 col-12 mt-3">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="border-radius: 4px;">
                          <div class="carousel-item active">
                            <img src="img/graha bunda maria.jpg" class="d-inline-flex w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/mahaviharamaitreya.jpg" class="d-inline-flex w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/vihara-gunung-timur-temple.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="ccp btn btn-dark btn-sm rounded-pill" aria-hidden="true"><i class="bi bi-arrow-left-short fs-1"></i></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="ccn btn btn-dark btn-sm rounded-pill" aria-hidden="true" ><i class="bi bi-arrow-right-short fs-1"></i></span>
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

    <!-- AREA START -->
    <!-- AREA END -->

    @include('layout.ulasan')
        
    </section>
    <!-- AREA END -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>