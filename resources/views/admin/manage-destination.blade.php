<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Manage Destinasi</title>
        <link rel="icon" href="{{asset('img/Tripadvisor_logoset_solid_green.svg')}}">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{asset('./css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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
                        <h1 class="p-4 boldfont">Daftar Destinasi</h1>
                        <a href="#" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#editDestinasiModal">Tambah Destinasi</a>
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
                                <table id="datatablesSimple" style="text-transform: capitalize">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Jenis</th>
                                            {{-- <th>Website</th>
                                            <th>Kontak</th> --}}
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1; @endphp
                                        @foreach ($destinations as $destination)
                                        
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$destination->destination_name}}</td>
                                            <td>{{$destination->address}}</td>
                                            <td>{{$destination->destination_type}}</td>
                                            {{-- <td>{{$destination->website}}</td> --}}
                                            {{-- <td>{{$destination->contact}}</td> --}}
                                            <td>
                                                <a href="{{route('manage-destination-detail', ['id' => $destination->id] )}}" class="text-green">
                                                    More..
                                                </a>
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


                <!-- Modal Tambah Destinasi -->
                <div class="modal fade" id="editDestinasiModal" tabindex="-1" aria-labelledby="editDestinasiModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editDestinasiModalLabel">Tambah Destinasi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                            <!-- Isi form tambah destinasi di sini -->
                            <form action="{{route('destination-add')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="rating_id">
                                <div class="mb-3">
                                    <label for="destination_name" class="form-label">Nama Destinasi</label>
                                    <input type="text" class="form-control @error('destination_name') is-invalid @enderror" id="destination_name" 
                                        name="destination_name" value="{{old('destination_name')}}">
                                    @error('destination_name')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
            
                                <div class="mb-3">
                                    <label for="destination_type" class="form-label">Tipe Destinasi (restoran, wisata, hotel)</label>
                                    <input type="text" class="form-control @error('destination_type') is-invalid @enderror" id="destination_type" 
                                        name="destination_type" value="{{old('destination_type')}}">
                                    @error('destination_type')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
            
                                <div class="mb-3">
                                    <label for="category" class="form-label">Kategori</label>
                                    <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" 
                                        name="category" value="{{old('category')}}">
                                    @error('category')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
            
                                <div class="mb-3">
                                    <label for="address" class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" 
                                        name="address" value="{{old('address')}}">
                                    @error('address')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
            
                                <div class="mb-3">
                                    <label for="city" class="form-label">Kota</label>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" 
                                        name="city" value="{{old('city')}}">
                                    @error('city')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
            
                                <div class="mb-3">
                                    <label for="country" class="form-label">Negara</label>
                                    <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" 
                                        name="country" value="{{old('country')}}">
                                    @error('country')
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
                                    <label for="contact" class="form-label">Kontak</label>
                                    <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" 
                                        name="contact" value="{{old('contact')}}">
                                    @error('contact')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
            
                                <div class="mb-3">
                                    <label for="map" class="form-label">Map</label>
                                    <input type="text" class="form-control @error('map') is-invalid @enderror" id="map" 
                                        name="map" value="{{old('map')}}">
                                    @error('map')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
            
                                <div class="mb-3">
                                    <label for="photo" class="form-label">Foto</label>
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


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('./assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{ asset('./assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/datatables-simple-demo.js')}}"></script>
    </body>
</html>