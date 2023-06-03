<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$photo->destination_name}}</title>
    <link rel="icon" href="{{asset('img/Tripadvisor_logoset_solid_green.svg')}}">

    <style>
        @font-face {
            font-family: TripSansBold;
            src: url(../font/TripSans-Bold.ttf);
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .bold {
            font-family: TripSansBold;
        }

        .header {
            display: flex;
            justify-content: center;
        }

        h1 {
            font-size: 40px;
        }
        a {
            position: fixed;
            height: 50px;
            width: 50px;
            top: 20px;
            left: 20px;
            color: white;
            background-color: #00AA6C;
            border-radius: 50%;
        }
        a svg {
            position: fixed;
            height: 35px;
            width: 35px;
            top: 25px;
            left: 25px;
        }
        body {
            background-color: antiquewhite
        }
        .images-container {
            display: flex;
            flex-wrap: wrap;
        }

        .images-container img {
            width: 365.7px;
            height: 300px;
            margin: 5px;
            border-radius: 20px;
            box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.7);
        }

    </style>

</head>
<body>
    <a href="{{url()->previous()}}">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1"></path>
         </svg>
    </a>
    <div class="header">
        <h1 class="bold">{{$photo->destination_name}}</h1>
    </div>
    <div class="images-container">
        <img src="{{ asset('img/destinasi/' . $photo->photo) }}" alt="">
        @foreach ($comments as $comment)
            @foreach ($comment->comment_photo as $foto)
                <img src="{{ asset('img/ulasan/' . $foto->photo) }}" alt="">
            @endforeach
        @endforeach    
    </div>    
</body>
</html>