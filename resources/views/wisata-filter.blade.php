<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Pencarian</title>
    <link rel="stylesheet" href="{{asset('css/search-result.css')}}">
    <link rel="icon" href="{{ asset('/img/Tripadvisor_logoset_solid_green.svg')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        @include('layout.nav')
        @include('layout.kategori')
    </nav>

    <section>
        <div class="SearchContainer">
            <div class="ContentContainer">
                @if (count($filteredData) > 0)
                    <h3 class="SearchTitle bold">Hasil yang cocok dengan filter Anda</h3>
                @else
                    <h3 class="SearchTitle bold">Tidak ada hasil yang cocok dengan filter Anda</h3>
                @endif
            

                @foreach ($filteredData as $data)
                @if ($data->destination->destination_type == 'wisata')

                @if ($data->destination->destination_type == 'restoran')
                <a href="{{ route('restoran_detail', ['id' => $data->destination->id]) }}">
                @elseif ($data->destination->destination_type == 'hotel')
                <a href="{{ route('hotel_detail', ['id' => $data->destination->id]) }}">
                @else 
                <a href="{{ route('destinasi_detail', ['id' => $data->destination->id]) }}">
                @endif
                
                    <div class="ForeachDestinasi">
                        <div class="Img">
                            <img src="{{asset('/img/destinasi/' . $data->destination->photo)}}" width="177px" height="140px" alt="">
                            <div class="CategoryContent">
                                <div class="shadow"></div>
                                <p class="bold">{{$data->destination->destination_type}}</p>
                            </div>
                        </div>

                        <div class="Detail">
                            <h3 class="bold">{{$data->destination->destination_name}}</h3>
                            <p>{{$data->destination->city}}, {{$data->destination->country}}</p>
                            <br>
                            @php
                            $i = $comments->where('destination_id', $data->destination->id)->count();
                            $avgRating = $comments->where('destination_id', $data->destination->id)->avg('rating.value');
                            $roundedRating = floor($avgRating);
                            @endphp
                            @for($i=0; $i < $roundedRating; $i++)
                                <i class="bi bi-circle-fill text-success" style="margin-right:1px; color:#00aa6c"></i>
                            @endfor
                            @for($i=0; $i < 5 - $roundedRating; $i++)
                                <i class="bi bi-circle me-1" style="margin-right:1px; color:#00aa6c;"></i>
                            @endfor         
                            <br> <br>              
                            <p>{{$data->destination->address}}</p>
                            
                        </div>
                    </div>
                </a>
                @endif
                @endforeach
            </div>
        </div>
        <footer>
            @include('layout.footer')
        </footer>
    </section>


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>