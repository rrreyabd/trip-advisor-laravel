<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel</title>
    
    <link rel="stylesheet" href="{{asset('css/restoran.css')}}">
    <link rel="icon" href="{{asset('img/Tripadvisor_logoset_solid_green.svg')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    {{-- navbar --}}
        @include('layout.nav')
        @include('layout.kategori')
    {{-- navbar end --}}
    <div class="rB">
        <div class="rBa">
            <div class="rBaA">
                <div class="rBaAa">
                    <form action="{{ route('hotel-filter') }}" method="GET">
                        @csrf
                        @foreach ($features as $feature)
                        <div class="checkbox">
                            <input type="checkbox" name="feature_id[]" id="{{$feature->feature_detail}}" value="{{$feature->id}}">
                            <label class="bold" for="{{$feature->feature_detail}}">&nbsp; {{$feature->feature_detail}}</label>
                        </div>
                        @endforeach
                        <button class="bold">Filter</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="rBb">
            <div class="rBbA">
                @foreach ($hotels as $hotel)
                <div class="loopingRestoran">
                    <a href="{{ route('hotel_detail', ['id' => $hotel->id , 'city' => $hotel->city]) }}">
                        <div class="restoranImg">
                            <img src= "{{ asset('/img/destinasi/' . $hotel->photo ) }}" alt="">
                        </div>
                        
                        <div class="restoranCard">
                            <p class="bold">{{ $hotel->destination_name }}</p>
                            @php
                            $i = $comments->where('destination_id', $hotel->id)->count();
                            $avgRating = $comments->where('destination_id', $hotel->id)->avg('rating.value');
                            $roundedRating = floor($avgRating);
                            @endphp
                            @for($i=0; $i < $roundedRating; $i++)
                                <i class="bi bi-circle-fill text-success" style="margin-right:1px; color:#00aa6c"></i>
                            @endfor
                            @for($i=0; $i < 5 - $roundedRating; $i++)
                                <i class="bi bi-circle me-1" style="margin-right:1px; color:#00aa6c;"></i>
                            @endfor
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