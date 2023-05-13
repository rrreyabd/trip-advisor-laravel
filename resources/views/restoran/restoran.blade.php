<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restoran</title>
    
    <link rel="stylesheet" href="css/restoran.css">
</head>
<body>
    {{-- navbar --}}
        @include('layout.nav')
        @include('layout.kategori')
    {{-- navbar end --}}

    <div class="rA">
        <h1>Restoran di Medan</h1>
    </div>

    <div class="rB">
        <div class="rBa">
            <div class="rBaA">
                <div class="rBaAa">

                </div>
            </div>
        </div>


        <div class="rBb">
            <div class="rBbA">
                @for ($i = 0; $i < 20; $i++)
                <div class="loopingRestoran">
                    <a href="restoran-detail">
                        <div class="restoranImg">
                            <img src="./img/restoranFood/milo-brownies-memiliki.jpg" alt="">
                        </div>
                        
                        <div class="restoranCard">
                            <p class="bold">TheBites Brownies</p>
                            <b class="bold green">4.5</b>
                            <br> 
                            <b class="small">20 Ulasan</b>
                        </div>
                    </a>
                </div>
                @endfor
            </div>
        </div>
    </div>
    @include('layout.footer')
</body>
</html>