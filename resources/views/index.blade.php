<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripAdvisor: Lebih dari 1 miliar ulasan & kontribusi untuk Hotel, Objek Wisata, Restoran, dan lainnya</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="./img/Tripadvisor_logoset_solid_green.svg">

    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <section class="firstSection">

        <!-- AD START -->
        <a href="">
            <div class="ad">

                <div class="adText">
                    <p class="bold large">Kalian berdua sepertinya harus jalan-jalan.</p>
                    <p>Rencanakan liburan yang layak Anda dapatkan dengan aplikasi kami.</p>
                    <button>
                        <p class="bold medium">Download aplikasi</p>
                    </button>
                </div>
                
                <div class="adImage">
                    <img class="img" src="./img/ad.jpg" alt="">
                    <img class="logo" src="./img/Tripadvisor_lockup_horizontal_tertiary_on_dark.svg" alt="">
                </div>

            </div>
        </a>
        <!-- AD END -->

        <!-- NAV START -->
        <nav>
            <div class="navLogo">
                <img width="190px" height="54px" src="./img/Logo.svg" alt="">
            </div>

            <div class="navBody center">

                <a href="/ulas">
                    <div class="ulas center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                            <path d="M13.5 6.5l4 4"></path>
                        </svg>
                        <p class="bold">Ulas</p>
                    </div>
                </a>
                
                <a href="">
                    <div class="trip center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                        </svg>
                        <p class="bold">Trip</p>
                    </div>
                </a>

                <!-- <a href="">
                    <div class="pemberitahuan center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                        </svg>
                        <p class="bold">Pemberitahuan</p>
                    </div>
                </a> -->

                <a href="./login">
                    <div class="masuk center">
                        <p class="bold center">Masuk</p>
                    </div>
                </a>

            </div>
        </nav>
        <!-- NAV END -->
        
        <!-- CATEGORY START -->
        <div class="category center bold">

            <a href="hotel">            
                <div class="categoryBorder">
                    <p>Hotel</p>
                    <svg viewBox="0 0 24 24" width="24px" height="24px" class="d Vb UmNoP"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.832 5.228c0-.469.38-.85.85-.85h15.624c.47 0 .85.381.85.85v6.65c.68.561 1.22 1.392 1.22 2.543v4.847h-1.5v-1.673H3.284v1.673h-1.5V14.394c.025-.655.304-1.589 1.049-2.351V5.228zm2.634 5.587c.264-.034.542-.051.837-.051h3.896c-.503-.483-1.31-.931-2.433-.931-1.09 0-1.83.467-2.3.982zm7.39-.051h4.468l.036.003c.161.016.343.042.536.082a2.36 2.36 0 00-.221-.233c-.447-.41-1.18-.783-2.254-.783-1.078 0-1.751.273-2.181.584a2.395 2.395 0 00-.385.347zm5.8-1.283c-.726-.651-1.812-1.148-3.235-1.148-1.347 0-2.339.347-3.06.868-.342.248-.61.525-.821.802-.736-.86-2.005-1.67-3.774-1.67-1.629 0-2.733.712-3.434 1.503V5.878h14.324v3.603zM3.283 16.095h16.594V14.42c0-.703-.355-1.188-.888-1.545-.56-.374-1.263-.561-1.74-.612H6.304c-1.118 0-1.81.316-2.237.677-.57.482-.765 1.123-.783 1.496v1.658z"></path></svg>
                </div>
            </a>

            <a href="">
                <div class="categoryBorder">
                    <p class="start">Destinasi Wisata</p>
                    <svg viewBox="0 0 40 40" width="40px" height="40px" class="d Vb UmNoP"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 5.25h19.5v4.454l-.536.16a2.752 2.752 0 000 5.272l.536.16v4.454H2.25v-4.454l.536-.16a2.752 2.752 0 000-5.272l-.536-.16V5.25zm1.5 1.5v1.876a4.25 4.25 0 010 7.748v1.876h16.5v-1.876a4.25 4.25 0 010-7.748V6.75H3.75z"></path><path d="M12 15a1 1 0 110 2 1 1 0 010-2zM12 11.5a1 1 0 110 2 1 1 0 010-2zM12 8a1 1 0 110 2 1 1 0 010-2z"></path></svg>
                </div>
            </a>

            <a href="./restoran">
                <div class="categoryBorder">
                    <p>Restoran</p>
                    <svg viewBox="0 0 24 24" width="24px" height="24px" class="d Vb UmNoP"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.798 5.141L17.47 2.47l1.06 1.06-2.671 2.672c-.679.679-1.055 1.462-1.12 2.199-.043.5.054 1.003.327 1.472L19.97 4.97l1.06 1.06-4.906 4.906c.473.281.974.387 1.466.354.718-.047 1.467-.394 2.096-1.023A905.812 905.812 0 0022.24 7.7l.226-.228 1.067 1.055-.228.23a1012.001 1012.001 0 01-2.559 2.57c-.849.849-1.927 1.384-3.057 1.459a4.027 4.027 0 01-2.647-.768l-1.231 1.231 7.72 7.72-1.061 1.06-5.97-5.97-3 3-1.75-1.75-4.72 4.72-1.06-1.06 4.72-4.72-4.392-4.391a4.75 4.75 0 010-6.718L5 4.44l7.75 7.75 1.232-1.232a3.971 3.971 0 01-.737-2.686c.1-1.147.67-2.246 1.553-3.13zM13.439 15L5.028 6.588a3.25 3.25 0 00.33 4.21L11.5 16.94 13.44 15z"></path></svg>
                </div>
            </a>

            <a href="forum">
                <div class="categoryBorder">
                    <p>Forum</p>
                    <svg viewBox="0 0 24 24" width="24px" height="24px" class="d Vb UmNoP"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.566 11.25h4.873c-.07-1.831-.397-3.448-.87-4.628-.268-.672-.57-1.165-.865-1.478-.25-.264-.458-.364-.62-.388H11.922c-.161.024-.37.124-.62.388-.296.313-.597.806-.866 1.478-.472 1.18-.798 2.797-.869 4.628zm-.133-6.027a8.259 8.259 0 00-.39.841c-.554 1.385-.907 3.198-.978 5.186H4.788a7.252 7.252 0 014.645-6.027zm2.393-1.965C7.078 3.348 3.25 7.226 3.25 12a8.744 8.744 0 008.747 8.75c4.833 0 8.753-3.918 8.753-8.75a8.741 8.741 0 00-8.57-8.742 2.079 2.079 0 00-.354 0zm2.746 1.965c.142.263.272.545.39.841.554 1.385.907 3.198.978 5.186h3.272a7.248 7.248 0 00-4.64-6.027zm4.64 7.527H15.94c-.071 1.988-.424 3.8-.977 5.185-.12.298-.25.581-.393.845a7.259 7.259 0 004.642-6.03zm-9.774 6.036a8.244 8.244 0 01-.395-.851c-.554-1.384-.907-3.197-.978-5.185H4.788a7.25 7.25 0 004.65 6.036zm5.001-6.036c-.07 1.83-.397 3.448-.87 4.628-.268.671-.57 1.164-.865 1.477-.295.312-.532.395-.701.395-.17 0-.407-.083-.701-.395-.297-.313-.598-.806-.867-1.477-.472-1.18-.798-2.797-.869-4.628h4.873z"></path></svg>
                </div>
            </a>

        </div>
        <!-- CATEGORY END -->

        <!-- SEARCH SECTION START -->
        <div class="searchContainer center">
            <form method="GET">
                    <button name="search" class="btnSearch center"> 
                        <i class="fas fa-search"></i>
                    </button>
                    <input type="text" name="search" class="inputBox" placeholder="Ke mana?" autocomplete="off">
            </form>
        </div>
        <!-- SEARCH SECTION END -->

        <!-- PENCARIAN TERAKHIR START -->
        <!-- <div class="pencarianTerakhirSection">
            <h1>Pencarian terakhir anda</h1>

            <div class="pencarianTerakhir start">

                <a href="">
                    <div class="pencarianTerakhirBorder center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                        </svg>
                        
                        <div class="pencarianTerakhirText">
                            <p class="bold">Seoul</p>
                            <p class="small">Korea Selatan</p>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="pencarianTerakhirBorder center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                        </svg>
                        
                        <div class="pencarianTerakhirText">
                            <p class="bold">Medan</p>
                            <p class="small">Sumatera Utara</p>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="pencarianTerakhirBorder center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                        </svg>
                        
                        <div class="pencarianTerakhirText">
                            <p class="bold">Tokyo</p>
                            <p class="small">Jepang</p>
                        </div>
                    </div>
                </a>

            </div>
        </div> -->
        <!-- PENCARIAN TERAKHIR END -->

        <!-- REKOMENDASI START -->
        <div class="rekomendasiContainer">
            <h1>Destinasi pilihan kami</h1>
            <p>Kota-kota memukau dengan pengalaman luar biasa.</p>

            <div class="rekomendasi start">


                <div class="destinationContainer">
                    <div class="destination1">
                        <a href="">
                            <img src="./img/section1/copenhagen.jpg" width="270px" height="270px" alt="Copenhagen, Denmark">
                            <p class="bold large">Copenhagen, Denmark</p>
                        </a>
                    </div>
    
                    <div class="destination2">
                        <a href="">
                            <img src="./img/section1/goyang.jpg" width="270px" height="270px" alt="Goyang, Korea Selatan">
                            <p class="bold">Goyang, Korea Selatan</p>
                        </a>
                    </div>
    
                    <div class="destination3">
                        <a href="">
                            <img src="./img/section1/belfast.jpg" width="270px" height="270px" alt="Belfast, UK">
                            <p class="bold">Belfast, UK</p>
                        </a>
                    </div>
    
                    <div class="destination4">
                        <a href="">
                            <img src="./img/section1/melbourne.jpg" width="270px" height="270px" alt="Melbourne, Australia">
                            <p class="bold">Melbourne, <br> Australia</p>
                        </a>
                    </div>
                    
                </div>
    
            </div>

        </div>
        <!-- REKOMENDASI END -->

        <!-- DONATION START -->
        <div class="donationContainer">
            <div class="donationImage center">
                <div class="donationImageCrop">
                    <img src="./img/donate.jpg" alt="">
                </div>
            </div>

            <div class="donationText center">
                <div class="donationTitle">
                    <img src="./img/Tripadvisor_logoset_solid_green.svg" width="24px" alt="">
                    <p>&nbsp;&nbsp;Yayasan Tripadvisor</p>
                </div>
                <p class="bold veryLarge">Bantu orang-orang yang membutuhkan</p>
                <p class="medium">Kami telah mengumpulkan 9 juta USD untuk upaya <br> 
                    bantuan makanan darurat World Central Kitchen <br> 
                    di seluruh dunia. Terus berikan bantuan dengan <br> 
                    mendukung upaya mereka di Turki dan negara <br>
                    lain.
                </p>
                <a href="https://donate.wck.org/give/444414/#!/donation/checkout">
                    <p class="bold">Ayo menyumbang sekarang</p>
                </a>
            </div>

        </div>
        <!-- DONATION END -->
    </section>

    <!-- <section class="secondSection center">
        <div class="explore start">

            <h1>Lihat untuk menjelajahi</h1>

            <div class="contentContainer">
                <div class="content">
                    <a href="">
                        <img src="./img/section2/content1.jpg" height="273.987px" width="365.325px" alt="">
                        <p class="bold">10 tempat untuk melihat lokasi syuting acara TV dan film favorit Anda di tahun 2023</p>
                    </a>
                </div>

                <div class="content">
                    <a href="">
                        <img src="./img/section2/content2.jpg" height="273.987px" width="365.325px" alt="">
                        <p class="bold">Hotel di Paris dengan pemandangan Menara Eiffel terbaik</p>
                    </a>
                </div>

                <div class="content">
                    <a href="">
                        <img src="./img/section2/content3.jpg" height="273.987px" width="365.325px" alt="">
                        <p class="bold">Panduan penduduk setempat tentang Manila</p>
                    </a>
                </div>
            </div>

        </div>
    </section> -->

    <!-- <section class="thirdSection">
        <div class="secondExplore start">

            <h1>Destinasi terpopuler untuk liburan Anda yang berikutnya</h1>
            <p>Berikut destinasi yang dikunjungi sesama wisatawan</p>

            <div class="destinationContainer">
                <div class="d   estination1">
                    <a href="">
                        <img src="./img/section3/kyoto.jpg" width="270px" height="270px" alt="Kyoto, Jepang">
                        <p class="bold large">Kyoto, Jepang</p>
                    </a>
                </div>

                <div class="destination2">
                    <a href="">
                        <img src="./img/section3/seoul.jpg" width="270px" height="270px" alt="Seoul, Korea Selatan">
                        <p class="bold">Seoul, Korea <br> Selatan</p>
                    </a>
                </div>

                <div class="destination3">
                    <a href="">
                        <img src="./img/section3/singapura.jpg" width="270px" height="270px" alt="Singapura, Singapura">
                        <p class="bold">Singapura, <br> Singapura</p>
                    </a>
                </div>

                <div class="destination4">
                    <a href="">
                        <img src="./img/section3/agra.jpg" width="270px" height="270px" alt="Agra, India">
                        <p class="bold">Agra, India</p>
                    </a>
                </div>
                
            </div>

        </div>
    </section> -->

    <section class="fourthSection center">
        <div class="winner">

            <div class="winnerLink center">
                <img class="ofrmB" src="https://static.tacdn.com/img2/travelers_choice/TC_logomark_solid_cream.svg" width="120px" height="75px" alt="">
                <h1 class="bold veryLarge">Terbaik dari Travellers' Choice</h1>
                <a class="center" href="">
                    <p class="bold">Lihat pemenangnya</p>
                </a>
            </div>
            
            <div class="winnerImage">
                <img src="./img/section4/bg-img.jpeg" alt="">
            </div>
            
        </div>
    </section>
    
    <footer>
        <div class="topFooter">

            <div class="tentang">
                <p>Tentang Tripadvisor</p>
                <ul>
                    <li>
                        <a href="">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="">Pers</a>
                    </li>
                    <li>
                        <a href="">Sumber Informasi dan Kebijakan</a>
                    </li>
                    <li>
                        <a href="">Kepercayaan & Keselamatan</a>
                    </li>
                    <li>
                        <a href="">Hubungi kami</a>
                    </li>
                    <li>
                        <a href="">Pernyataan Aksesibilitas</a>
                    </li>
                </ul>
            </div>

            <div class="telusuri">
                <p>Telusuri</p>
                <ul>
                    <li>
                        <a href="">Tulis ulasan</a>
                    </li>
                    <li>
                        <a href="">Tambah Tempat</a>
                    </li>
                    <li>
                        <a href="">Gabung </a>
                    </li>
                    <li>
                        <a href="">Travellers' Choice</a>
                    </li>
                    <li>
                        <a href="">PeloporRamahLingkungan</a>
                    </li>
                    <li>
                        <a href="">Pusat Bantuan</a>
                    </li>
                </ul>
            </div>

            <div class="bisnis">
                <p>Berbisnislah dengan Kami</p>
                <ul>
                    <li>
                        <a href="">Pemilik</a>
                    </li>
                    <li>
                        <a href="">Keunggulan Bisnis</a>
                    </li>
                    <li>
                        <a href="">Penempatan Sponsor</a>
                    </li>
                    <li>
                        <a href="">Beriklan dengan Kami</a>
                    </li>
                    <li>
                        <a href="">Akses API Konten kami</a>
                    </li>
                </ul>
                <br>
                <p>Dapatkan Aplikasi</p>
                <ul>
                    <li>
                        <a href="">Aplikasi iPhone</a>
                    </li>
                    <li>
                        <a href="">Aplikasi Android</a>
                    </li>
                </ul>
            </div>

        </div>

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