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
                    <h1 class="p-4 boldfont">Edit Mitra</h1>

                    <div class="container mt-5">
                        <div class="row justify-content-center">
                          <div class="col-lg-6">
                            <form action="{{route('partner-edit', ['id' => $partner->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="created_at" value="{{$partner->created_at}}">
                              <div class="mb-3">
                                <label for="partner" class="form-label">Mitra</label>
                                <input type="text" class="form-control @error('partner') is-invalid @enderror" id="partner" 
                                name="partner" value="{{$partner->partner}}">
                              </div>
                              <div class="mb-3">
                                <label for="website" class="form-label">Website</label>
                                <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" 
                                name="website" value="{{$partner->website}}">
                              </div>
                              <div class="mb-3">
                                <label for="inputPhoto" class="form-label">Logo</label>
                                <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" 
                                name="photo" value="{{ old('photo', $partner->photo) }}">            
                              </div>
                              <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{route('manage-partner')}}" class="btn btn-secondary">Back</a>
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


    <!-- Modal Tambah Destinasi -->
    <div class="modal fade" id="editDestinasiModal" tabindex="-1" aria-labelledby="editDestinasiModalLabel"
        aria-hidden="true">
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
                            <label for="partner" class="form-label">Nama Mitra</label>
                            <input type="text" class="form-control @error('partner') is-invalid @enderror" id="partner"
                                name="partner" value="{{$partner}}">
                            @error('partner')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="website" class="form-label">Website</label>
                            <input type="text" class="form-control @error('website') is-invalid @enderror" id="website"
                                name="website" value="{{('website')}}">
                            @error('website')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label">Foto</label>
                            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo"
                                name="photo" value="{{('photo')}}">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous">
        </script>
        <script src="{{ asset('./assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{ asset('./assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>
        <script src="{{ asset('js/datatables-simple-demo.js')}}"></script>
</body>

</html>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h2 class="mb-4">Form Input</h2>
            <form>
                <div class="mb-3">
                    <label for="partner" class="form-label">Nama Mitra</label>
                    <input type="text" class="form-control" id="partner" placeholder="Partner">
                </div>
                <div class="mb-3">
                    <label for="website" class="form-label">Website</label>
                    <input type="text" class="form-control" id="website" placeholder="Website">
                </div>
                <div class="mb-3">
                    <label for="inputPhoto" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="inputPhoto">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="#" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>