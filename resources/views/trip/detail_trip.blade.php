<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trip</title>

    <link rel="stylesheet" href="{{ asset('./css/detail_trip.css') }}">
</head>
<body>
    @include('layout.nav')
    @include('layout.kategori')
    
    <div class="dtsection">
        <div class="dtheader">
            <h1 class="bold" style="margin-top:auto;">{{ $plan->trip_name }}</h1>
        </div>
        <p class="dtheader" style=";">"{{ $plan->trip_info }}"</p>

        @php $j = 1 @endphp
        @foreach($days as $day)
        <div class="dtbody">
            <div class="dtDay">
                <p class="bold">Hari ke-{{$j}}</p>
                <p class="bold">
                    {{ count($day->trip_destination_detail) }} item
                </p>
            </div>

            
            <div class="dtListTrip">
                @foreach($day->trip_destination_detail as $detail)
                {{-- @dd($detail); --}}
                <div class="dtTrip">
                    <a href="">
                        <div class="dtTripImg">
                            <img src="{{ asset('img/destinasi/' . $detail->destination->photo) }}" 
                            style="object-fit:contain; width:100%; "
                            alt="">
                        </div>
                        
                        <div class="dtTripDetail">
                            <p class="bold">{{ $detail->destination->destination_name }}</p>
                            <p class="green bold">{{ $detail->destination->city }}</p>
                    </a>
                        <form action="">
                            <input type="text" name="" id="" placeholder="Tambahkan Catatan">
                        </form>
                        </div>
                </div>
                @endforeach
            </div>

        </div>
    
        @php $j++ @endphp
        @endforeach
    
    </div>

    @include('layout.footer')
</body>
</html>