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
                                                <td class="td1">Lokasi</td>
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
                                </div>
                                
                                <div class="right">
                                    <img src="{{asset('img/' . $destination->photo )}}" alt="">
                                </div>
                            
                            </div>

                            <div class="action">
                                <a href="" class="btn btn-success ms-4">Edit Destinasi</a>
                                {{-- <a href="{{ route('destination-delete', ['id' => $destination->id]) }}" class="btn btn-danger ms-4">Hapus Destinasi</a> --}}
                                <div class="deleteBtn ms-4">
                                    <form action="{{route('destination-delete', $destination->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" onclick="return confirm('Konfirmasi penghapusan')">Hapus Destinasi</button>
                                    </form>
                                </div>
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