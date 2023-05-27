<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>

    <link rel="stylesheet" href="./css/forum.css">
    <link rel="icon" href="./img/Tripadvisor_logoset_solid_green.svg">

    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>
</head>
<body>
 
    <!-- include navbar -->

    <section>
        <div class="topSide">
            <div class="topLeft">
                <img src="	https://static.tacdn.com/img2/brand/feed/forums_people_narrow.svg" alt="">
                <h1>Forum TripAdvisor</h1>
            </div>

            <div class="topRight">
                <form action="{{route('forum_search')}}" method="GET">
                    @csrf
                    <input type="text" name="query" placeholder="Wisata terbaik di kota Medan?">
                    <button type="submit">Cari Forum</button>
                    <i class="fa-solid fa-magnifying-glass"></i>    
                </form>
            </div>
        </div>

        <div class="recomendation">
            <div class="leftRec">
                <p>Apa Kabar, Rey</p>
            </div>
            
            <div class="rightRec">
                <div class="recKota">
                    <h3>Cari berdasarkan kota</h3>
                    <a href="">
                        Medan
                    </a>
                    <a href="">
                        Binjai
                    </a>
                    <a href="">
                        Tanjung Balai
                    </a>
                    <a href="">
                        Pematang Siantar
                    </a>
                    <a href="">
                        Lubuk Pakam
                    </a>
                </div>

                <div class="recKategori">
                    <h3>Cari berdasarkan kategori</h3>
                    <a href="">
                        Objek Wisata
                    </a>
                    <a href="">
                        Restoran
                    </a>
                    <a href="">
                        Hotel
                    </a>
                    <a href="">
                        Penerbangan
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer>

        <div class="bottomFooter">
            <div class="leftBottomFooter">

                <div class="topLeftBottomFooter">
                    <img src="./img/Tripadvisor_logoset_solid_green.svg" width="40px" height="40px" alt="">
                    <div class="copyright">
                        <p>&copy; 2023 Tripadvisor LLC Semua hak dilindungi undang-undang.</p>
                        <a href="">Persyaratan Penggunaan </a>
                        <a href="">Pernyataan Privasi dan Cookie </a>
                        <a href="">Persetujuan cookie </a>
                        <a href="">Peta Situs </a>
                        <a href="">Cara kerja situs </a>
                        <a href="">Hubungi Kami </a> 
                    </div>
                </div>
                
                <div class="bottomLeftBottomFooter">
                    <p class="small">Ini adalah versi situs web kami yang ditujukan untuk penutur bahasa Indonesia di Indonesia. Jika Anda berdomisili di negara atau kawasan lain, pilih versi Tripadvisor yang tepat untuk negara atau kawasan Anda di menu drop-down.
                        <br> <br>
                        TripAdvisor LLC tidak menjamin ketersediaan harga yang diiklankan di situs dan aplikasi kami. Harga yang tercantum mungkin hanya berlaku untuk durasi menginap tertentu atau memiliki tanggal pengecualian, persyaratan, ataupun batasan lainnya yang berlaku. TripAdvisor LLC tidak bertanggung jawab atas setiap konten di situs web eksternal yang tidak dimiliki atau dioperasikan oleh Tripadvisor.
                        <br> <br>
                        TripAdvisor LLC bukan biro pemesanan atau penyelenggara tur. Bila Anda melakukan pemesanan di salah satu mitra kami, pastikan Anda memeriksa situs mereka untuk mengetahui selengkapnya tentang semua biaya yang berlaku.</p>
                </div>
            </div>

            <div class="rightBottomFooter">
                <div class="currency">
                    <select name="" id="">
                        <option value="1">Rp IDR</option>
                    </select>

                    <select name="" id="">
                        <option value="1">Indonesia</option>
                    </select>
                </div>

                <div class="socialMedia">
                    <a href="">
                        <svg viewBox="0 0 24 24" width="24px" height="24px" class="d Vb UmNoP"><path d="M12.001 2.061C6.478 2.061 2 6.537 2 12.061c0 4.993 3.661 9.132 8.445 9.879v-6.99H7.89v-2.889h2.556l.001-2.203c0-2.506 1.484-3.896 3.769-3.896 1.095 0 2.23.21 2.23.21v2.445h-1.253c-1.242 0-1.639.777-1.639 1.568l.003 1.876h2.777l-.444 2.889h-2.333v6.99C18.34 21.192 22 17.054 22 12.061c0-5.524-4.477-10-9.999-10z"></path></svg>
                    </a>
                    
                    <a href="">
                        <svg viewBox="0 0 24 24" width="24px" height="24px" class="d Vb UmNoP"><path d="M2 18.1c2.2.2 4.3-.5 5.9-1.899-1.2-.101-3.6-2.4-4-2.9h1.6c-1.9-.5-3.2-2.2-3.2-4.1.6.099 1.2.299 1.7.499h.2C2.7 8.3 2.2 6 3.1 4.1c2.1 2.6 5.3 4.2 8.6 4.4V7.4c.1-2.2 2-4 4.2-4 .9 0 1.7.3 2.4.8.4.3.8.3 1.2.2l1.9-.7c-.4.9-.9 1.6-1.6 2.3.601-.1 1.3-.4 1.9-.5l.3.2c-.6.5-1.2 1.1-1.7 1.5-.1.3-.2.7-.2 1.1 0 1.9-.5 3.8-1.3 5.601A11.982 11.982 0 019.5 20.1c-2.4.2-4.9-.199-7-1.3l-.5-.7" ></path></svg>
                    </a>

                    <a href="">
                        <svg viewBox="0 0 24 24" width="24px" height="24px" class="d Vb UmNoP"><path d="M21.938 7.9c0-.8-.199-1.6-.5-2.4-.5-1.4-1.5-2.5-2.9-3-.799-.3-1.6-.4-2.4-.5h-4.099c-1.4 0-2.8 0-4.2.1-.8 0-1.6.2-2.3.5-1.3.5-2.4 1.5-2.9 2.8-.3.8-.5 1.6-.5 2.5 0 1.1-.1 1.4-.1 4.1-.1 1.4-.1 2.7 0 4.1 0 .801.2 1.601.5 2.4.5 1.3 1.6 2.4 2.9 2.9.8.3 1.6.399 2.4.5 1.4.1 2.8.1 4.2.1s2.8 0 4.099-.1c.801 0 1.602-.2 2.4-.5a5.17 5.17 0 002.9-2.9c.301-.8.398-1.6.5-2.4 0-1.1.1-1.399.1-4.1s-.1-3.1-.1-4.1zM20.137 16c0 .6-.1 1.3-.299 1.9-.301.898-1 1.6-1.9 1.898-.6.201-1.301.301-1.9.301-1.1 0-1.4.102-4 .102-1.3 0-2.7 0-4-.102-.6 0-1.2-.1-1.9-.3-.9-.3-1.6-1-1.9-1.899-.3-.601-.4-1.2-.4-1.9 0-1.1-.1-1.4-.1-4 0-1.3 0-2.7.1-4 .1-.6.2-1.3.3-1.9.3-.9 1-1.6 1.9-1.9.7-.2 1.3-.3 2-.3 1.1 0 1.4-.1 4-.1 1.3 0 2.701 0 4 .1.6 0 1.301.1 1.9.3.898.3 1.6 1 1.898 1.9.201.6.301 1.3.301 1.9 0 1.1.102 1.4.102 4-.001 2.6-.102 3-.102 4z"></path><path d="M12.138 6.9c-2.9 0-5.1 2.3-5.1 5.1s2.3 5.1 5.1 5.1 5.101-2.3 5.101-5.1-2.301-5.1-5.101-5.1zm0 8.4c-1.8 0-3.3-1.5-3.3-3.3s1.5-3.3 3.3-3.3c1.8 0 3.2 1.5 3.3 3.3 0 1.8-1.5 3.3-3.3 3.3zM17.438 5.5c-.699 0-1.199.5-1.199 1.2s.5 1.2 1.199 1.2 1.199-.5 1.199-1.2-.5-1.2-1.199-1.2z"></path></svg>
                    </a>
                </div>

            </div>
        </div>
    </footer>

</body>
</html>