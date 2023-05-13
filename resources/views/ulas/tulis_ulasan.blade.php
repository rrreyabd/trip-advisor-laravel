<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tulis Ulasan</title>

    <link rel="stylesheet" href="./css/tulis_ulasan.css">
</head>
<body>
    @include('layout.nav')

    <div class="tu">
        <div class="tua">
            <div class="tuab">
                <h1 class="bold">Beri tahu kami tentang kunjungan Anda.</h1>
                <div class="borderUlasan">
                    <img src="./img/restoranFood/milo-brownies-memiliki.jpg" alt="">
                    <p class="bold">TheBites Brownies</p>
                    <p>Komplek Multatuli Block CC 46 Medan, Indonesia</p>
                </div>
            </div>

            <div class="tuac">
                <div class="tuacA">
                    <div class="tuRate w-100">
                        <h2 class="bold">Bagaimana penilaian Anda tentang pengalaman Anda?</h2>
                        <br>
                            <form action="">
                                <input type="radio" name="rating"> <b>Sangat Buruk</b>
                                <input type="radio" name="rating"> <b>Buruk</b>
                                <input type="radio" name="rating"> <b>Rata-rata</b>
                                <input type="radio" name="rating"> <b>Sangat Bagus</b>
                                <input type="radio" name="rating"> <b>Luar Biasa</b>
                            <br><br><br>

                            <h2 class="bold">Kapan Anda pergi?</h2>
                                <input type="date" name="tanggal" id="tanggal" class="tanggal">
                            <br><br><br>

                            <h2 class="bold">Dengan siapa Anda pergi?</h2>
                                <input type="radio" name="with">    <b>Pasangan</b>
                                <input type="radio" name="with">    <b>Keluarga</b>
                                <input type="radio" name="with">    <b>Teman</b>
                                <input type="radio" name="with">    <b>Bisnis</b>
                                <input type="radio" name="with">    <b>Sendirian</b>
                            <br><br><br>

                            <h2 class="bold">Apa tujuan anda disini?</h2>
                                <select name="tujuan" id="tujuan" class="tujuan">
                                    <option value="">Pilih satu</option>
                                    <option value="">Sarapan</option>
                                    <option value="">Brunch</option>
                                    <option value="">Makan Siang</option>
                                    <option value="">Makan Malam</option>
                                    <option value="">Makanan Penutup</option>
                                    <option value="">Minum Kopi atau Teh</option>
                                    <option value="">Camilan</option>
                                    <option value="">Minuman</option>
                                    <option value="">Makan Larut Malam</option>
                                    <option value="">Lainnya</option>
                                </select>
                            <br><br><br>

                            <h2 class="bold">Tulis Ulasan</h2>
                                <textarea name="ulasan" id="ulasan" cols="70" rows="8" class="bold" placeholder="Tempat ini cocok untuk menikmati malam kasual.."></textarea>
                            <br><br><br>
            
                            <h2 class="bold">Beri Judul Ulasan Anda</h2>
                                <textarea name="judul" id="judul" cols="70" rows="1" class="bold" placeholder="Beri kami intisari pengalaman Anda"></textarea>
                            <br><br><br>
                            
                            <h2 class="bold">Tambahkan Foto</h2>
                            <p>Opsional</p>
                                <input style="margin-top: 20px;" type="file" id="image">
                            <br><br><br>
                            
                            <button type="submit" class="ulasanSubmit bold">Kirim Ulasan</button>
                            </form>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>