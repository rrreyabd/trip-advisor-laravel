<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{$destination->destination_name}}</title>
        <link rel="icon" href="{{asset('img/Tripadvisor_logoset_solid_green.svg')}}">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{asset('./css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <style>
            input[type="checkbox"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid #34c759;
            outline: none;
            transition: border-color 0.3s ease-in-out;
            cursor: pointer;
            position: relative;
            }

            /* Untuk mengubah tampilan checkbox menjadi hijau saat dicentang */
            input[type="checkbox"]:checked {
            background-color: #fff;
            }

            /* Untuk menambahkan lingkaran di dalam checkbox */
            input[type="checkbox"]::before {
            content: "";
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #34c759;
            opacity: 0;
            transition: opacity 0.2s ease-in-out;
            }

            /* Untuk mengubah opacity lingkaran menjadi 1 saat checkbox dicentang */
            input[type="checkbox"]:checked::before {
            opacity: 1;
            }

        </style>
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
                                    <img src="{{asset('img/destinasi/' . $destination->photo )}}">
                                </div> 
                            </div>

                        </div>
                        <div class="d-flex flex-row">

                            <div class="d-flex flex-row card w-full">
                                <div class="m-4">
                                    <div class="d-flex flex-row mb-4 justify-content-between">
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
                                    
                                    <!-- Modal Tambah -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Fasilitas</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <form action="{{ route('feature-add')}}" method="POST">
                                                @csrf
                                                
                                                <div class="modal-body">
                                                    @if ($destination->destination_type == "restoran")
                                                        @foreach ($restaurant_features as $not_feature)
                                                        <div class="">
                                                            <input type="hidden" name="destination_id" value="{{$destination->id}}">
                                                            <input type="checkbox" name="checkbox[]" value="{{$not_feature->id}}"> {{$not_feature->feature_detail}}
                                                        </div>
                                                        @endforeach
                                                    @endif
                                                    @if ($destination->destination_type == "hotel")
                                                        @foreach ($hotel_features as $not_feature)
                                                        <div class="">
                                                            <input type="hidden" name="destination_id" value="{{$destination->id}}">
                                                            <input type="checkbox" name="checkbox[]" value="{{$not_feature->id}}"> {{$not_feature->feature_detail}}
                                                        </div>
                                                        @endforeach
                                                    @endif
                                                    @if ($destination->destination_type == "wisata")
                                                        @foreach ($wisata_features as $not_feature)
                                                        <div class="">
                                                            <input type="hidden" name="destination_id" value="{{$destination->id}}">
                                                            <input type="checkbox" name="checkbox[]" value="{{$not_feature->id}}"> {{$not_feature->feature_detail}}
                                                        </div>
                                                        @endforeach
                                                    @endif
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row flex-wrap">
                                        @foreach ($destination_features as $feature)
                                        <div class="d-flex flex-row" style="line-height: .3">
                                            {{-- @foreach ($restaurant_features as $feature) --}}
    
                                            <form action="{{ route('feature-delete', ['id' => $feature->id]) }}"
                                                class="d-flex flex-row boldfont align-items-center" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="border-0 bg-transparent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-red icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M18 6l-12 12"></path>
                                                        <path d="M6 6l12 12"></path>
                                                    </svg>
                                                </button>
                                                <p class="m-auto" style="display: flex; align-items: center;"> {{ $feature->feature->feature_detail }}</p>
                                            </form>
                                            
                                        </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                        @if ($destination->destination_type == "hotel")
                        <div class="mt-4 card d-inline-block">
                            <div class="m-4 w-full">
                                <div class="d-flex flex-row mb-4 justify-content-between">
                                    <h4 class="boldfont">Partner</h4>
                                    <a href="#" class="d-flex flex-row text-decoration-none" data-bs-toggle="modal" data-bs-target="#partnerModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-2 icon icon-tabler icon-tabler-plus text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 5l0 14"></path>
                                        <path d="M5 12l14 0"></path>
                                        </svg>
                                        <p class="text-green">Tambah Partner</p>
                                    </a>
                                </div>
                                @foreach ($partner as $price)
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <img src="{{asset('img/partner/' . $price->partner->photo )}}" alt="" width="200px" class="me-4">
                                        @php
                                            $formattedPrice = "Rp " . number_format($price->price, 0, ',', '.');
                                        @endphp
                                        <b class="boldfont text-center">{{$formattedPrice}}</b>

                                        <form action="{{route('price-delete', ['id' => $price->id])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="price_id" value="{{$price->id}}">
                                            <button type="submit" class="border-0 bg-transparent">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-red icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                @endforeach
                            </div>
                        </div>
                        @endif
                        
                        <!-- Modal Tambah Partner -->
                        <div class="modal fade" id="partnerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Partner</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <form action="{{ route('price-add')}}" method="POST">
                                    @csrf
                                    
                                    @foreach ($partners as $partner)
                                        <div class="modal-body">
                                            <input type="hidden" name="destination_id" value="{{$destination->id}}">
                                            <input type="checkbox" name="checkbox[]" value="{{$partner->id}}"> 
                                            <img src="{{asset('img/partner/' . $partner->photo)}}" width="100px" alt="">
                                            <label for="price" class="boldfont">&nbsp; Tarif</label>
                                            <input type="number" name="price[]">
                                        </div>
                                        @endforeach

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </form>
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