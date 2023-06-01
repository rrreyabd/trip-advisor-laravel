<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trip</title>

    <link rel="stylesheet" href="{{ asset('./css/detail_trip.css') }}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
    @include('layout.nav')
    @include('layout.kategori')
    
    <div class="dtsection">
        <div class="dtheader">
            <h1 class="bold" style="margin-top:auto;">{{ $plan->trip_name }}</h1>
        </div>
        <p class="dtheader" style=";">"{{ $plan->trip_info }}"</p>

    <div class="tbodyTrip">
        <button id="openModalBtn">
            <div class="tbodyAdd">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-plus-filled" width="17" height="17" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z" fill="currentColor" stroke-width="0"></path>
                </svg>&nbsp;
                <b>Tambah Perjalanan</b>
            </div>
        </button>
    </div>

        @php $d = 1 @endphp
        @foreach($days as $day)
        <div class="dtbody">
            <div class="dtDay">
                <p class="bold">Hari ke-{{$d}}</p>
                <p class="bold">
                    {{ count($day->trip_destination_detail) }} item
                </p>
            </div>
            <div class="dtListTrip">
                @foreach($day->trip_destination_detail as $detail)
                {{-- @dd($detail); --}}
                <div class="dtTrip">
                    @if($detail->destination->destination_type == "restoran")
                        <a href="{{ route('restoran_detail', ['id'=> $detail->destination->id]) }}">
                    @elseif($detail->destination->destination_type == "hotel")
                        <a href="{{ route('hotel_detail', ['id'=> $detail->destination->id]) }}">
                    @elseif($detail->destination->destination_type == "wisata")
                        <a href="{{ route('destinasi_detail', ['id'=> $detail->destination->id]) }}">
                    @endif
                        <div class="dtTripImg">
                            <img src="{{ asset('img/destinasi/' . $detail->destination->photo) }}" 
                            style="object-fit:contain; width:100%; "
                            alt="">
                        </div>
                        
                        <div class="dtTripDetail">
                            <p class="bold">{{ $detail->destination->destination_name }}</p>
                            <p class="green bold">{{ $detail->destination->city }}</p>
                        </a>
                        <form action="{{ route('delete_detail', ['id' => $detail->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="del-button">    
                                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </div>
                        </form>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
        @php $d++ @endphp
        @endforeach
    
    </div>

    @include('layout.footer')

    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-top">
                <h2>Tambah Perjalanan</h2>
                <span class="close">&times;</span>
            </div>
            <div class="modal-content-inner">
                <form action="{{ route('simpan_detail') }}" method="POST" id="searchForm">
                    @csrf
                    <label for="trip_plan" style="text-align: center; margin-bottom:30px">{{ $plan->trip_name }}</label>
                    <input type="hidden" required name="planId" value="{{ $plan->id }}">
                    <label for="destination">Cari Destinasi</label>
                    <input type="text" id="destination" name="destination">                    
                    <input type="hidden" id="destinationId" required name="destinationId" value="">
                                        
                    <label for="day">Hari Ke -
                        <select name="day" style="display:inline-flex; margin-left:5px">
                            @php $j = 1 @endphp
                            @foreach($days as $day)
                                <option value="{{ $day->id }}" required name="day" style="text-align: center"> {{ $j }}</option>
                            @php $j++ @endphp
                            @endforeach
                        </select>
                    </label>
                    <button type="submit">Buat</button>
                </form>
            </div>
        </div>
    </div>


    <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("openModalBtn");
        var closeBtn = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        closeBtn.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script>
$(document).ready(function() {
    $('#destination').autocomplete({
        source: function(request, response) {
            $.ajax({
                url: '{{ route('search') }}',
                method: 'GET',
                data: {
                    _token: '{{ csrf_token() }}',
                    query: request.term
                },
                dataType: 'json',
                success: function(data) {
                    response(data);
                }
            });
        },
        minLength: 1, // Atur jumlah karakter minimal sebelum live search dimulai
        select: function(event, ui) {
            $('#destination').val(ui.item.destination_name); // Menampilkan label destinasi yang dipilih
            $('#destinationId').val(ui.item.id); // Menyimpan id destinasi yang dipilih pada input tersembunyi
            return false;
        }
    }).data("ui-autocomplete")._renderItem = function(ul, item) {
        return $("<li>")
            .append("<div>" + item.destination_name + "</div>")
            .appendTo(ul);
    }.bind(this);

        $('#searchForm').on('submit', function() {
        var selectedDestinationId = $('#destinationId').val();
        $('#destinationId').val(selectedDestinationId);
    });
});

    </script>
</body>
</html>