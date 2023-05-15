<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran</title>

    <link rel="stylesheet" href="./css/detail_restoran.css">
    <link rel="icon" href="./img/Tripadvisor_logoset_solid_green.svg">

    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('layout.nav')
    @include('layout.kategori')
    <section class="headerSection">
        <!-- HEADER -->
        <header>
            <div class="topHeader">
                <div class="topLeftHeader">
                    <h1>Nama Restauran</h1>
                </div>

                <div class="topRightHeader">
                    <a href="">
                        <div class="ulas center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                <path d="M13.5 6.5l4 4"></path>
                            </svg>
                            <p class="bold">Ulas &nbsp; | &nbsp;</p>
                        </div>
                    </a>
                    
                    <a href="">
                        <div class="trip center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                            </svg>
                            <p class="bold">Simpan &nbsp; | &nbsp;</p>
                        </div>
                    </a>
    
                    <a href="">
                        <div class="pemberitahuan center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-share-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M8 9h-1a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-8a2 2 0 0 0 -2 -2h-1"></path>
                                <path d="M12 14v-11"></path>
                                <path d="M9 6l3 -3l3 3"></path>
                             </svg>
                            <p class="bold">Bagikan</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="midHeader">
                <a href="#ulasan">
                    <svg class="UctUV d H0" viewBox="0 0 128 24" width="88" height="16" aria-label="4,0 dari 5 lingkaran">
                        <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform=""></path>
                        <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(26 0)"></path>
                        <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(52 0)"></path>
                        <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(78 0)"></path>
                        <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z" transform="translate(104 0)"></path>
                    </svg>
                    <p class="bold">&nbsp; Jumlah Ulasan</p>
                    <p>&nbsp; | </p>
                    <p> &nbsp; <b>#1</b> dari 40 Restoran di Sumatera Utara</p>
                </a>
            </div>

            <div class="bottomHeader">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor"></path>
                 </svg>
                 <a href="">Alamat</a>
                 <p>&nbsp; | &nbsp;</p>

                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                 </svg>
                 <a href="tel:+1234567890">+1 (234) 567-890</a>
                 <p>&nbsp; | &nbsp;</p>

                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-laptop" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M3 19l18 0"></path>
                    <path d="M5 6m0 1a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v8a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1z"></path>
                 </svg>
                 <a href="">Situs Web</a>
                 <p>&nbsp; | &nbsp;</p>

                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock-hour-4" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                    <path d="M12 12l3 2"></path>
                    <path d="M12 7v5"></path>
                 </svg>
                 <a href="">Jam Operasional</a>
            </div>
        </header>
    </section>
    
    <section class="contentSection">
        <div class="contentContainer">
            <div class="image">
                <a href="">
                    <img src="./img/restoran/imageRestoran/garuda-nasi-padang.jpg" alt="">
                    <img src="./img/restoran/imageRestoran/garuda-nasi-padang.jpg" alt="">
                    <img src="./img/restoran/imageRestoran/garuda-nasi-padang.jpg" alt="">
                </a>
            </div>
            
            <div class="detail">
                <div class="detailContainer">
                    <div class="ulasan">
                        <a href="ulasan">
                            <h2>Penilaian dan ulasan</h2>

                            <div class="rating">
                                <h3>4.0</h3>
                                <svg class="UctUV d H0" viewBox="0 0 128 24" width="102" height="39" aria-label="4,0 dari 5 lingkaran">
                                    <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform=""></path>
                                    <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(26 0)"></path>
                                    <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(52 0)"></path>
                                    <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(78 0)"></path>
                                    <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z" transform="translate(104 0)"></path>
                                </svg>
                                <h3>270 Ulasan</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="detailContainer">
                    <h2>Rincian</h2>
                    
                    <b>MASAKAN</b>
                    <p>Asia, Indonesia</p>
                    
                    <b>DIET KHUSUS</b>
                    <p>Halal</p>
                    
                    <b>MAKANAN</b>
                    <p>Makan Siang, Makan Malam, Larut Malam</p>

                </div>

                <div class="detailContainer">
                    <h2>Lokasi</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.012549794802!2d98.6626999751127!3d3.5845924963895737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e2a112d293b%3A0x33c7f25e292d16a5!2sRestoran%20Garuda%20medan!5e0!3m2!1sid!2sid!4v1683364421288!5m2!1sid!2sid" width="344" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    
                    
                    <div class="link">
                        <a href="">
                            
                        </a>
                        
                        <a href="">
                            
                        </a>
                        
                        <a href="">
                            
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout.footer');
</body>
</html>