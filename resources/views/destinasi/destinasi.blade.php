<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/destinasi.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
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
                <a class="btn btn-sm bi bi-pen text-black rounded-pill" aria-current="ulas" href="#"> Ulas</a>
              </li>
              <li class="nav-item mt-1">
                <a class="btn btn-sm bi bi-heart text-black rounded-pill" aria-current="trip" href="#"> Trip</a>
              </li>
              <li class="nav-item mt-1">
                <a class="btn btn-sm bi bi-bell text-black rounded-pill" aria-current="notice" href="#"> Pemberitahuan</a>
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
      
    <!-- JUDUL -->
    <section id="kategori">
    <div class="container ">
        <div class="row mt-2 ">
            <div class="col-md-11" >
                <h1 class="fw-bold">Objek Wisata di Medan</h1>
            </div>
        </div>
    </div>
    <!-- AWAL KATEGORI -->
    <div class="container mt-4">

        <!-- CAROUSEL -->
        {{-- <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <ul class="list-unstyled d-flex justify-content-center">
                    <li class="card m-2 img-card">
                    <img src="img/mahaviharamaitreya.jpg" width="300" height="300" class="img card-img-top" alt="...">
                    <button class="btn btn-light btn-sm inline-flex rounded-pill"><i class="bi bi-heart-fill text-black"></i></button>
                    <div class="card-body">
                        <h5 class="card-title">Card 1</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-half text-success"></i>
                            <p class="small">250</p>
                        </div>
                        <p class="card-text">This is a sample card.</p>
                    </div>
                    </li>
                    <li class="card m-2 img-card">
                    <img src="img/MasjidRaya.jpg" width="300" height="300" class="img card-img-top" alt="...">
                    <button class="btn btn-light btn-sm inline-flex rounded-pill"><i class="bi bi-heart-fill text-black"></i></button>
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-half text-success"></i>
                            <p class="small">250</p>
                        </div>
                        <p class="card-text">This is a sample card.</p>
                    </div>
                    </li>
                    <li class="card m-2 img-card">
                    <img src="img/stupa-borobudur-yang.jpg" height="300" width="300"class="img card-img-top" alt="...">
                    <button class="btn btn-light btn-sm inline-flex rounded-pill"><i class="bi bi-heart-fill text-black"></i></button>
                    <div class="card-body">
                        <h5 class="card-title">Card 3</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-half text-success"></i>
                            <p class="small">250</p>
                        </div>
                        <p class="card-text">This is a sample card.</p>
                    </div>
                    </li>
                </ul>
                </div>
                <div class="carousel-item">
                <ul class="list-unstyled d-flex justify-content-center">
                    <li class="card m-2 img-card">
                    <img src="img/graha bunda maria.jpg" class="img card-img-top" width="300" height="300" alt="graha">
                    <button class="btn btn-light btn-sm inline-flex rounded-pill"><i class="bi bi-heart-fill text-black"></i></button>
                    <div class="card-body">
                        <h5 class="card-title">Card 4</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-half text-success"></i>
                            <p class="small">250</p>
                        </div>
                        <p class="card-text">This is a sample card.</p>
                    </div>
                    </li>
                    <li class="card m-2 img-card align-items-stretch">
                    <img src="img/vihara-gunung-timur-temple.jpg" width="300" height="300"class="img card-img-top" alt="...">
                    <div class="card-body ">
                            <button class="btn btn-light btn-sm inline-flex rounded-pill"><i class="bi bi-heart-fill text-black"></i></button>
                        <h5 class="card-title">Card 5</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-half text-success"></i>
                            <p class="small">250</p>
                        </div>
                        <p class="card-text">This is a sample card.</p>
                    </div>
                    </li>
                    <li class="card m-2 img-card">
                    <img src="img/kuil-shri-mariamman.jpg" width="300" height="300" class="img card-img-top" alt="...">
                    <button class="btn btn-light btn-sm inline-flex rounded-pill"><i class="bi bi-heart-fill text-black"></i></button>
                    <div class="card-body">
                        <h5 class="card-title">Card 6</h5>
                        <div class="rating">
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-fill text-success"></i>
                            <i class="bi bi-star-half text-success"></i>
                            <p class="small">250</p>
                        </div>
                        <p class="card-text">This is a sample card.</p>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="me-auto">
                    <span class="ccp btn btn-dark btn-sm rounded-pill" aria-hidden="true"><i class="bi bi-arrow-left-short fs-1"></i></span>
                    <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="ms-auto">
                    <span class="ccn btn btn-dark btn-sm rounded-pill" aria-hidden="true" ><i class="bi bi-arrow-right-short fs-1"></i></span>
                    <span class="visually-hidden">Next</span>
            </button>
            </div>       --}}
    
    
        </section>

    <div class="container">

        <div class="row">
            @for ($i = 0; $i < 6; $i++)
            
            <div class="col-md-4 mb-3">
                <a class="text-black no-underline" href="destinasi_detail">
                    <div class="card" style="width: 300; height:300">
                        <div class="img-wrapper">
                        <img src="img/graha bunda maria.jpg" class="card-img-top" alt="...">
                        <button class="btn btn-light btn-sm inline-flex rounded-pill"><i class="bi bi-heart-fill text-black"></i></button>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Graha Bunda Maria</h5>
                            <div class="rating">
                                <i class="bi bi-star-fill text-success"></i>
                                <i class="bi bi-star-fill text-success"></i>
                                <i class="bi bi-star-fill text-success"></i>
                                <i class="bi bi-star-fill text-success"></i>
                                <i class="bi bi-star-half text-success"></i>
                                <p class="small">250</p>
                            </div>
                            <p class="card-text">Museum Benda Khusus</p>
                        </div>
                    </div>
                </a>
            </div>

            @endfor

        </div>
        <hr>
    </div>
    <!-- AKHIR KATEGORI WISATA -->

    <!-- JQUERY DAN JAVASCRIPT -->
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>