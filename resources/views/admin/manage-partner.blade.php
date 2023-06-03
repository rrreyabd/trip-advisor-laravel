<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Manage Mitra</title>
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
                        <h1 class="p-4 boldfont">Daftar Mitra</h1>
                        <a href="#" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#editDestinasiModal">Tambah Mitra</a>
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
                                            <th>Logo</th>
                                            <th>Partner</th>
                                            <th>Website</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1; @endphp
                                        @foreach ($partners as $partner)               
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td> <img src="{{asset ('img/partner/' . $partner->photo )}}" width="300px" alt=""> </td>
                                            <td>{{$partner->partner}}</td>
                                            <td>{{$partner->website}}</td>
                                            <td>
                                                <a href="{{route('edit-partner', ['id' =>$partner->id])}}" class="btn btn-success mb-2">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{route('partner-delete', $partner->id)}}" method="POST">
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

                        <!-- Modal Tambah Mitra -->
                        <div class="modal fade" id="editDestinasiModal" tabindex="-1" aria-labelledby="editDestinasiModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editDestinasiModalLabel">Tambah Destinasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <!-- Isi form tambah mitra di sini -->
                                    <form action="{{route('partner-add')}}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="partner" class="form-label">Nama Destinasi</label>
                                            <input type="text" class="form-control @error('partner') is-invalid @enderror" id="partner" 
                                                name="partner" value="{{old('partner')}}">
                                            @error('partner')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                    
                                        <div class="mb-3">
                                            <label for="website" class="form-label">Website</label>
                                            <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" 
                                                name="website" value="{{old('website')}}">
                                            @error('website')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                    
                                        <div class="mb-3">
                                            <label for="photo" class="form-label">Logo</label>
                                            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" 
                                                name="photo" value="{{old('photo')}}">
                                            @error('photo')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                    
                    
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </div>
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