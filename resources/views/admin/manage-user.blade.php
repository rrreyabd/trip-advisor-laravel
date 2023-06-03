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
                        <h1 class="p-4 boldfont">Daftar Pengguna</h1>
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
                                            <th>No</th>
                                            <th>Foto Profil</th>
                                            <th>Nama Depan</th>
                                            <th>Nama Belakang</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Alamat</th>
                                            <th>Negara</th>
                                            <th>Website</th>
                                            <th>About</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1; @endphp
                                        @foreach ($users as $user)               
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>
                                                @if ($user->profile_photo)
                                                    <img src="{{asset('img/profile_photo/' . $user->profile_photo )}}" alt="" width="80px" height="80px">
                                                @else
                                                    <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/ea/2e/default-avatar-2020-67.jpg" alt="" width="80px" height="80px">
                                                @endif
                                            </td>
                                            <td>{{$user->firstName}}</td>
                                            <td>{{$user->lastName}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->username}}</td>
                                            <td>{{$user->address}}</td>
                                            <td>{{$user->country}}</td>
                                            <td>{{$user->website}}</td>
                                            <td>{{$user->about}}</td>
                                            <td>
                                                
                                                <form action="{{route('user-delete', $user->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Konfirmasi penghapusan')">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @php $i++; @endphp
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('./assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{ asset('./assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/datatables-simple-demo.js')}}"></script>
    </body>
</html>