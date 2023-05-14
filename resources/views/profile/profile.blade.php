<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <link rel="stylesheet" href="./css/profile.css">
</head>

<body class="BodyContainer">
    <nav>
        @include('layout.nav')
        @include('layout.kategori')
    </nav>

    <div class="ProfileContainer">
        <div class="ProfileMainContainer">
            <div class="TopProfile">

            </div>
            
            
            <div class="BottomProfile">
                <div class="BottomLeftProfile">
                    <div class="TopBottomLeftProfile">

                    </div>

                    <div class="BottomBottomLeftProfile">
                        
                    </div>
                </div>

                <div class="BottomRightProfile">
                    <div class="carousel">
                            
                        <div class="carousel-slide">
                            <div class="TopCarousel">

                            </div>

                            <div class="carousel-image">
                                <img src="https://i.pinimg.com/564x/31/59/fc/3159fc8d8df79e2165f05a433a645107.jpg" alt="Gambar 2">
                            </div>

                            <div class="carousel-details">
                                <h3>Detail Gambar 2</h3>
                                <p>Deskripsi gambar 2.</p>
                            </div>
                        </div>
                        
                        <div class="carousel-slide">
                            <div class="TopCarousel">

                            </div>
                            <div class="carousel-image">
                                <img src="https://i.pinimg.com/564x/b3/34/1b/b3341b95b97dc49444309769bc1033a8.jpg" alt="Gambar 2">
                            </div>

                            <div class="carousel-details">
                                <h3>Detail Gambar 3</h3>
                                <p>Deskripsi gambar 3.</p>
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

    <script src="./js/profile.js"></script>
</body>

</html>