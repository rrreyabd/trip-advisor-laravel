<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{$destination->destination_name}}</title>
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
            <div id="layoutSidenav_content" class="bg-tripadvisor">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 boldfont">General Information</h1>
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card mb-4 mt-4" style="padding-bottom: 30px">
                            <div class="card-body flex-row d-flex ">
                                <div class="left">
                                    <br>
                                    <div class="data">
                                        <table>
                                            <tr>
                                                <td class="td1">Nama destinasi</td>
                                                <td class="colon">:</td>
                                                <td class="td2 boldfont">{{$destination->destination_name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="td1">Jenis</td>
                                                <td class="colon">:</td>
                                                <td class="td2 boldfont text-capitalize">{{$destination->destination_type}}</td>
                                            </tr>
                                            <tr>
                                                <td class="td1">Kategori</td>
                                                <td class="colon">:</td>
                                                <td class="td2 boldfont text-capitalize">{{$destination->category}}</td>
                                            </tr>
                                            <tr>
                                                <td class="td1">Alamat</td>
                                                <td class="colon">:</td>
                                                <td class="td2 boldfont">{{$destination->address}}</td>
                                            </tr>
                                            <tr>
                                                <td class="td1">Kota</td>
                                                <td class="colon">:</td>
                                                <td class="td2 boldfont">{{$destination->city}}</td>
                                            </tr>
                                            <tr>
                                                <td class="td1">Negara</td>
                                                <td class="colon">:</td>
                                                <td class="td2 boldfont">{{$destination->country}}</td>
                                            </tr>
                                            <tr>
                                                <td class="td1">Website</td>
                                                <td class="colon">:</td>
                                                <td class="td2 boldfont">{{$destination->website}}</td>
                                            </tr>
                                            <tr>
                                                <td class="td1">Kontak</td>
                                                <td class="colon">:</td>
                                                <td class="td2 boldfont">{{$destination->contact}}</td>
                                            </tr>
                                            <tr>
                                                <td class="td1">Ditambahkan pada</td>
                                                <td class="colon">:</td>
                                                <td class="td2 boldfont">{{$destination->created_at}}</td>
                                            </tr>
                                            <tr>
                                                <td class="td1">Diperbarui pada</td>
                                                <td class="colon">:</td>
                                                <td class="td2 boldfont">{{$destination->updated_at}}</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="mt-4 action">
                                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editDestinasiModal">Edit Destinasi</a>
        
                                        <div class="deleteBtn ms-4">
                                            <form action="{{route('destination-delete', $destination->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" onclick="return confirm('Konfirmasi penghapusan')">Hapus Destinasi</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="right">
                                    <img src="{{asset('img/' . $destination->photo )}}" alt="">
                                </div> 
                            </div>

                        </div>
                            <div class="d-flex flex-row card">
                                <div class="m-4">
                                    <div class="d-flex flex-row mb-4">
                                        <h4 class="boldfont">Fasilitas</h4>
                                        <a href="#" class="d-flex flex-row text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ms-2 icon icon-tabler icon-tabler-plus text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 5l0 14"></path>
                                                <path d="M5 12l14 0"></path>
                                            </svg>
                                            <p class="text-green">Tambah Fasilitas</p>
                                        </a>
                                    </div>
                                    
                                    <div class="d-flex flex-row flex-wrap" style="line-height: .3">
                                        @foreach ($restaurant_features as $feature)
                                        <p class="boldfont me-5 justify-center" style="display: flex; align-items: center;">
                                            • {{$feature->features->feature_detail}} &nbsp;
                                            <a href="{{route('feature-delete', ['id', $feature->restaurant_feature->id])}}">
                                              <svg xmlns="http://www.w3.org/2000/svg" class="text-red icon icon-tabler icon-tabler-trash" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M4 7l16 0"></path>
                                                <path d="M10 11l0 6"></path>
                                                <path d="M14 11l0 6"></path>
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                              </svg>
                                            </a>
                                        </p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                              
                    </div>
                </main>
                @include('admin.footer')
            </div>
        </div>


        <!-- Modal Edit Destinasi -->
        <div class="modal fade" id="editDestinasiModal" tabindex="-1" aria-labelledby="editDestinasiModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDestinasiModalLabel">Edit Destinasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Isi form edit destinasi di sini -->
                <form action="{{route('destination-edit', ['id' => $destination->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="destination_id" value="{{$destination->id}}">
                    <input type="hidden" name="created_at" value="{{$destination->created_at}}">

                    <div class="mb-3">
                        <label for="destination_name" class="form-label">Nama Destinasi</label>
                        <input type="text" class="form-control @error('destination_name') is-invalid @enderror" id="destination_name" 
                            name="destination_name" value="{{$destination->destination_name}}">
                        @error('destination_name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="destination_type" class="form-label">Tipe Destinasi (restoran, wisata, hotel)</label>
                        <input type="text" class="form-control @error('destination_type') is-invalid @enderror" id="destination_type" 
                            name="destination_type" value="{{$destination->destination_type}}">
                        @error('destination_type')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Kategori</label>
                        <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" 
                            name="category" value="{{$destination->category}}">
                        @error('category')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" 
                            name="address" value="{{$destination->address}}">
                        @error('address')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="city" class="form-label">Kota</label>
                        <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" 
                            name="city" value="{{$destination->city}}">
                        @error('city')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="country" class="form-label">Negara</label>
                        <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" 
                            name="country" value="{{$destination->country}}">
                        @error('country')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="website" class="form-label">Website</label>
                        <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" 
                            name="website" value="{{$destination->website}}">
                        @error('website')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="contact" class="form-label">Kontak</label>
                        <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" 
                            name="contact" value="{{$destination->contact}}">
                        @error('contact')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="map" class="form-label">Map</label>
                        <input type="text" class="form-control @error('map') is-invalid @enderror" id="map" 
                            name="map" value="{{$destination->map}}">
                        @error('map')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Foto</label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" 
                            name="photo" value="{{$destination->photo}}">
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('./assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{ asset('./assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/datatables-simple-demo.js')}}"></script>
    </body>
</html>