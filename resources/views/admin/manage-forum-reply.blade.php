<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Manage users</title>
    <link rel="icon" href="{{asset('img/Tripadvisor_logoset_solid_green.svg')}}">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{asset('./css/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> >
</head>

<body class="sb-nav-fixed">
    @include('admin.navbar')

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('admin.sidebar')
        </div>
        <div id="layoutSidenav_content" class="bg-light">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="p-4 boldfont">Daftar Balasan</h1>
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="card mb-4">
                        <div class="card-body">

                            <div class="uC">

                                <div class="uCa">
                                        <img src="{{ asset ('img/profile_photo/' . $forum->user->profile_photo) }}" alt=""  width="70px"
                                        height="70px" style="border-radius: 50%">
                                        
                                        <div class="lok">
                                            <p class="boldfont green">{{$forum->user->firstName}} {{$forum->user->lastName}}</p>
                                            <p>{{$forum->user->city}}, {{$forum->user->country}}</p>
                                        </div>

                                    <div class="">
                                        <form action="{{route('forum-delete', $forum->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button>
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>

                                </div>

                                <div class="uCb">
                                    <br>
                                    <h2 class="boldfont">{{$forum->title}}</h2>
                                    <p>{{\Carbon\Carbon::parse($forum->upload_date)->translatedFormat('d F Y')}}</p>
                                    <p>{{$forum->content}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    @foreach ($replies as $reply)
                    <div class="card">
                        <div class="card-body">
                            <div class="uC">
                                <div class="uCa">
                                    <img src="{{ asset ('img/profile_photo/' . $reply->user->profile_photo) }}" alt="" style="border-radius: 50%" width="70px"
                                        height="70px">
                                    <div class="lok">
                                        <p class="boldfont green">{{$reply->user->firstName}} {{$reply->user->lastName}}</p>
                                        <p>{{$reply->user->city}}, {{$reply->user->country}}</p>
                                    </div>

                                    <div class="">
                                        <form action="{{route('reply-delete', $reply->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <div class="uCb">
                                    <br>
                                    <p>{{\Carbon\Carbon::parse($reply->upload_date)->translatedFormat('d F Y')}}</p>
                                    <p>{{$reply->content}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

            </main>
        @include('admin.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('./assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{ asset('./assets/demo/chart-bar-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/datatables-simple-demo.js')}}"></script>
</body>

</html>