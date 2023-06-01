<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum - Tripadvisor</title>
    <link rel="icon" href="{{asset('img/Tripadvisor_logoset_solid_green.svg')}}">
    <link rel="stylesheet" href="{{ asset('css/detail_forum.css')}}">
</head>
<body>
    <section>
        <div class="floatingBack">
            <a href="{{route('forum_search') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1"></path>
                 </svg>
            </a>
        </div>
        @if(session('success'))
            <div id="alertDiv" class="alert alert-success alert-dismissible">
                <button id="closeBtn" type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('success') }}
            </div>
        @endif
        <div class="post">
        
            <div class="uC">

                <div class="uCa">
                    <div class="uCc">
                        <img src="{{ asset ('img/profile_photo/' . $forum->user->profile_photo) }}" alt="" style="border-radius: 50%; border: 4px solid #00AA6C" width="70px" height="70px">
                        
                        <div class="lok">
                            <h2 class="bold green">{{$forum->user->firstName}} {{$forum->user->lastName}}</h2>
                            <p>{{$forum->user->city}}, {{$forum->user->country}}</p>
                        </div>
                    </div>
                    @if ($forum->user_id == Auth::user()->id )
                    <div class="uCd">
                        <form action="{{route('user-forum-delete', $forum->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 7l16 0"></path>
                                    <path d="M10 11l0 6"></path>
                                    <path d="M14 11l0 6"></path>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    @endif
                </div>

                <div class="uCb">
                    <br>
                    <h2 class="bold">{{$forum->title}}</h2>
                    <p>{{\Carbon\Carbon::parse($forum->created_at)->translatedFormat('d F Y')}}</p>
                    <p>{{$forum->content}}</p>
                </div>

            </div>
        </div>

        <div class="addReply">
            <form action="{{route('add_reply')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="forum_id" value="{{$forum->id}}">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="userProfile">
                    <img src="{{asset('img/profile_photo/' . Auth::user()->profile_photo )}}" alt="" style="border-radius: 50%; border: 2px solid #00AA6C" width="20px" height="20px">
                    <p class="bold">{{Auth::User()->firstName}} {{Auth::User()->lastName}}</p>
                </div>
                <div class="">
                    <textarea name="reply" id="reply" cols="138" rows="5" placeholder="Berikan Pendapat Anda"></textarea>
                </div>
                <div class="btnReply">
                    <button type="submit">Kirim</button>
                </div>
            </form>
        </div>
        

        @php  $i = 1 @endphp
        @foreach ($replies as $reply)
        <div class="reply">
            <h2>Balasan #{{$i}}</h2>
            <br>
            <div class="uC">
                <div class="uCa">
                    <img src="{{ asset ('img/profile_photo/' . $reply->user->profile_photo) }}" alt="" style="border-radius: 50%; border: 3px solid #00AA6C" width="50px" height="50px">
        
                    <div class="lok">
                        <h3 class="bold green">{{$reply->user->firstName}} {{$reply->user->lastName}}</h3>
                        <p class="bold">{{\Carbon\Carbon::parse($reply->created_at)->translatedFormat('d F Y')}}</p>
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
    <script>
        var closeBtn = document.getElementById('closeBtn');
        var alertDiv = document.getElementById('alertDiv');
    
        closeBtn.addEventListener('click', function() {
            alertDiv.style.display = 'none';
        });
    </script>
</body>
</html>