<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trip</title>

    <link rel="stylesheet" href="./css/detail_trip.css">
</head>
<body>
    @include('layout.nav')
    @include('layout.kategori')
    
    <div class="dtsection">
        <div class="dtheader">
            <h1 class="bold">JUDUL TRIP</h1>
        </div>

        @php $j = 1 @endphp
        @for ($i = 0; $i < 7; $i++)

        <div class="dtbody">
            <div class="dtDay">
                <p class="bold">Hari ke-{{$j}}</p>
                <p class="bold">5 item</p>
            </div>

            
            <div class="dtListTrip">
                @for ($k = 0; $k < 5; $k++)
                <div class="dtTrip">
                    <a href="">
                        <div class="dtTripImg">
                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/4d/47/82/jeju-island.jpg?w=1200&h=-1&s=1" alt="">
                        </div>
                        
                        <div class="dtTripDetail">
                            <p class="bold">Rumah Tjong A Fie</p>
                            <p class="green bold">5.0 dari 5.0</p>
                    </a>
                        <form action="">
                            <input type="text" name="" id="" placeholder="Tambahkan Catatan">
                        </form>
                        </div>
                </div>
                @endfor
            </div>

        </div>
    
        @php $j++ @endphp
        @endfor
    
    </div>

    @include('layout.footer')
</body>
</html>