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
        <div class="left">
            <h1 class="bold">Tanyakan Forum</h1>
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/12/03/fb/caption.jpg?w=400&h=600&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/12/03/fb/caption.jpg?w=800&h=1100&s=1 2x" alt="">
        </div>
        <div class="right">
            <form action="{{route('forum-add')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                
                <h2 class="bold">Judul</h2>
                <input type="text" name="title">
                
                <h2 class="bold">Isi</h2>
                <textarea name="content" id="" cols="122" rows="6"></textarea>
                
                <button type="submit">Unggah</button>
            </form>

            <p><span>*</span>Kami ingin menekankan pentingnya menjaga sopan santun dalam forum ini ketika berinteraksi dengan pengguna lain.</p>
        </div>
    </section>
</body>
</html>