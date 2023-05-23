<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="./css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        @include('admin.navbar')

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('admin.sidebar')
            </div>
            <div id="layoutSidenav_content" class="bg-ta">
                <main>
                    <div class="container-fluid px-4 ">
                        <h1 class="mt-4 boldfont">Admin Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Welcome Back, {{Auth::user()->firstName}}!</li>
                        </ol>
                        
                        <div class="countContainer">
                            <div class="count">
                              <i class="fa-solid fa-users container-icon"></i>
                              <h1 class="boldfont">{{$count_users}}</h1>
                              <p class="boldfont">Total Pengguna</p>
                            </div>
                            <div class="count">
                              <i class="fa-solid fa-hotel container-icon"></i>
                              <h1 class="boldfont">{{$count_hotels}}</h1>
                              <p class="boldfont">Total Hotel</p>
                            </div>
                            <div class="count">
                              <i class="fa-solid fa-utensils container-icon"></i>
                              <h1 class="boldfont">{{$count_restaurants}}</h1>
                              <p class="boldfont">Total Restoran</p>
                            </div>
                            <div class="count">
                              <i class="fa-solid fa-location-dot container-icon"></i>
                              <h1 class="boldfont">{{$count_tours}}</h1>
                              <p class="boldfont">Total Objek Wisata</p>
                            </div>
                          </div>
                    </div>
                </main>
                @include('admin.footer')
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="./assets/demo/chart-area-demo.js"></script>
        <script src="./assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
