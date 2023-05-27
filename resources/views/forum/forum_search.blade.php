<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>

    <link rel="stylesheet" href="./css/forum_search.css">
    <link rel="icon" href="./img/Tripadvisor_logoset_solid_green.svg">

    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="searchTitle">
            <h1>Forum Perjalanan</h1>
            <br>
            <hr>
            <br>
        </div>

        <div class="searchContainer">
            <form action="{{route('forum_search')}}" method="GET">
                @csrf
                <input autocomplete="off" type="text" name="query" placeholder="Cari Forum">
                <button type="submit">Search</button>
            </form>
        </div>

        <hr>
        <br>

        <div class="searchList">
            <div class="listHeader">
                <h1 class="green">Pembahasan teratas dari {{$query}}</h1>

                <a href="">
                    Tanya sesuatu
                </a>
            </div>

            <div class="resultTable">
                <table>
                    <tr class="tableHeader">
                        <th class="question">Topik</th>
                        <th class="answer">Balasan</th>
                        <th class="lastDate">Tanggal Forum</th>
                    </tr>

                    @if ($forums)
                        @foreach ($forums as $forum)
                        <tr>
                            <td> <a href="{{ route('forum_detail', ['id' => $forum->id]) }}" class="green">{{Str::limit($forum->title, 70)}}</a> </td>          

                            @php 
                            $reply_count = $replies->where('forum_id', $forum->id)->count(); 
                            @endphp
                            <td class="answer">{{$reply_count}}</td>
                            <td class="green lastDate">{{\Carbon\Carbon::parse($forum->upload_date)->format('d F Y')}}</td>
                        </tr>
                        @endforeach
                    @else
                        <p>Sayang sekali, tidak ditemukan Forum apapun yang membahas {{$query}}.</p>
                    @endif
                </table>
            </div>
        </div>
    </section>
</body>
</html>