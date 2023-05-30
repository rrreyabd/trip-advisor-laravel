<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tanya forum</title>
    <link rel="stylesheet" href="{{asset('/css/tanya_forum.css')}}">
</head>
<body>
    <section>
        <h1 class="bold">Tanyakan Forum</h1>
        <form action="{{route('forum-add')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            
            <label for="title">Judul</label>
            <input type="text" name="title">

            <label for="content">Isi</label>
            <input type="text" name="content">
            
            <button type="submit">Unggah</button>
        </form>
    </section>
</body>
</html>