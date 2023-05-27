<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/detail_forum.css')}}">
</head>
<body>
    <section>

        <div class="post">
            <div class="uC">

                <div class="uCa">
                    <img src="{{ asset ('img/' . $forum->user->profile_photo) }}" alt="" style="border-radius: 50%; border: 4px solid #00AA6C" width="70px" height="70px">
        
                    <div class="lok">
                        <h2 class="bold green">{{$forum->user->firstName}} {{$forum->user->lastName}}</h2>
                        <p>{{$forum->user->city}}, {{$forum->user->country}}</p>
                    </div>
                </div>

                <div class="uCb">
                    <br>
                    <h2 class="bold">{{$forum->title}}</h2>
                    <p>{{\Carbon\Carbon::parse($forum->upload_date)->translatedFormat('d F Y')}}</p>
                    <p>{{$forum->content}}</p>
                </div>

            </div>
        </div>

        <div class="uI">
            
        </div>

        @php  $i = 1 @endphp
        @foreach ($replies as $reply)
        <div class="reply">
            <h2>Balasan #{{$i}}</h2>
            <br>
            <div class="uC">
                <div class="uCa">
                    <img src="{{ asset ('img/' . $reply->user->profile_photo) }}" alt="" style="border-radius: 50%; border: 4px solid #00AA6C" width="70px" height="70px">
        
                    <div class="lok">
                        <h3 class="bold green">{{$reply->user->firstName}} {{$reply->user->lastName}}</h3>
                        <p class="bold">{{\Carbon\Carbon::parse($reply->upload_date)->translatedFormat('d F Y')}}</p>
                    </div>
                </div>

                <div class="uCb">
                    <br>
                    <p>{{$reply->content}}</p>
                </div>
            </div>
        </div>
        @php  $i++ @endphp
        @endforeach

    </section>
</body>
</html>