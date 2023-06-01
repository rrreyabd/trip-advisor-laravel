<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Manage users</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{asset('./css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>    >
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
                        <h1 class="p-4 boldfont">Ulasan</h1>
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
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>                              
                                            <th>DESTINASI</th>                              
                                            <th>JUDUL</th>                              
                                            <th>KONTEN</th> 
                                            <th>FOTO</th>                              
                                            <th>HAPUS</th>                              
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comments as $comment)
                                        <tr>
                                            <td>{{$comment->id}}</td>
                                            <td>{{$comment->destination->destination_name}}</td>
                                            <td>{{$comment->title}}</td>
                                            <td>{!! chunk_split($comment->content, 50, "<br>") !!}</td>
                                            <td>
                                                <img src="{{optional($comment->comment_photo)->comment_photo ? asset('/img/ulasan/' . $comment->comment_photo->comment_photo) : ''}}" style="max-width:400px;" alt="">
                                            </td>
                                            <td>
                                                <form action="{{route('ulasan-delete', ['id' => $comment->id])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                @include('admin.footer')
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('./assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{ asset('./assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/datatables-simple-demo.js')}}"></script>
    </body>
</html>