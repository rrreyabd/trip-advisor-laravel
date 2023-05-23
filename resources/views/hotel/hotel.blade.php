<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel</title>
    
    <link rel="stylesheet" href="css/restoran.css">
</head>
<body>
    {{-- navbar --}}
        @include('layout.nav')
        @include('layout.kategori')
    {{-- navbar end --}}

    <div class="rA">
        <h1>Hotel di Medan</h1>
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
                @foreach ($hotels as $hotel)
                <div class="loopingRestoran">
                    <a href="{{ route('hotel_detail', ['id' => $hotel->id ]) }}">
                        <div class="restoranImg">
                            <img src= "{{ asset('/img/hotel/' . $hotel->photo ) }}" alt="">
                        </div>
                        
                        <div class="restoranCard">
                            <p class="bold">{{ $hotel->destination_name }}</p>
                            <b class="bold green">{{ $hotel->rating_id }}</b>
                            <br> 
                            <b class="small">
                                @php $i=0 @endphp 
                                @foreach($comments as $comment)
                                    @if($comment->destination->id == $hotel->id)
                                        @php $i++ @endphp 
                                    @endif
                                @endforeach
                                {{ $i }} ulasan
                            </b>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('layout.footer')
</body>
</html>