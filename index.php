<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Proveed esperti</title>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a><h1>Proveed <span> Esperti</span></h1></a>
            </div>
            <nav>
                <ul>
                    <li><a href="profile.php">Profil</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li class="dropdown">
                <a href="#" class="dropbtn">Produk</a>
                <div class="dropdown-content">
                    <a href="produc1.php">produk Apd</a>
                    <a href="produk2.php">produk Atk</a>
                    <a href="produk3.php">Produk Pantry</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Contact</a>
                <div class="dropdown-content">
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    <a href="mailto:info@example.com"><i class="far fa-envelope"></i> Email</a>
                    <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
                </div>
            </li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
            
        </div>
        <div class="row">
            <div class="col-1">
                <h1>Sekilas tentang Proveed esperti.<br><br></h1>
                <p>Perkenalkan Kami orang orang yang selalu berkeasi dan
inovasi dalam bidang usaha bertujuan positif
memenuhi kebutuhan client.
Sejak tahun 2012 kami berkecimpung di “PRODUCTION
HOUSE” dan “EVENT ORGANIZER”. Se-iring waktu
berjalan kami melakukan pembenahan dan perubahan
menciptakan pekerjaan “PENGADAAN BARANG DAN
JASA”.
Melalui kesamaa tujuan dan prinsip kerja, maka
sampai saat ini kami masih stabil dengan menjaga
kualitas untuk dapat diterima di tengah tengah
masyarakat dan dapat bersaing dengan kompetitor 4.0
Dengan mengucap syukur sampai saat ini kami masih
dapat dipercaya oleh beberapa BUMN, STASIUN TV,
BRAND & PRODUCT maupun Perusahaan untuk
menciptakan ide ide positif dan pelayanan kebutuhan
dengan baik guna menunjang dan melaksanakan
kebutuhan baik Perdagangan maupun Jasa.<br></p>
                <a href="produk2.php" class="btn">lihat Produk &#8594</a>
            </div>
            <div class="col-2">
                <img src="images/dasbords.png" alt="">
            </div>
        </div>
    </div>
</div>

<!-- ----------- featured categories ------------ -->
    <div class="categories">
        <div class="small-container">
            <h1></h1><br>
            <h1>VISI</h1><br>
            <p>“ Menjadi Sebuah Perusahaan yang berkualitas dann di percayai oleh seluruh pelanggan. ”</p>
            <br>
            <h1>MISI</h1><br>
            <p> “ Selalu berupaya dalam memberikan kepuasaan kepada pelanggan dengan beriorentasi pada kebutuhan dan kepentingan yang dimiliki setiap Pelanggan, Menyelengarakan Pengadaan Barang dan Jasa secara Visibel dan Akuntabel sebagai upaya memberikan kepuasan kepada Pelanggan, Bekerja secara Profesional dan Efisien, Memberikan Harga yang terbaik, Berupaya menjalankan Usaha dengan menerapkan sistem Good Corporate Governance. ”
            </p>
            <h1>Ada beberapa macem pelayanan kami :</h1>
            <p>“ Kami Menjual Produk dari berbagai Merek Berkualitas dengan Harga Terbaik .”</p>
            <h1>1. APD / Alat pelindung diri.
            </h1>
            <div class="row">
                <div class="col ">
                    <img src="images/apds.jpg" >
                </div>
                <div class="col ">
                    <img src="images/apd3.jpg" >
                </div>
                <div class="col ">
                    <img src="images/apd2.jpg" >
                </div>
                <div class="col ">
                    <img src="images/apd5.jpg" >
                </div>
                <div class="col ">
                    <img src="images/apd4.jpg" >
                </div>
                <div class="col ">
                    <img src="images/apd9.jpg" >
                </div>
            </div>
        </div>
    </div>

<!-- -------------- featured products ----------- -->

    <div class="small-container">
        <h2></h2><br>
        <h2 class="title"> 2. ATK / alat tulis kantor</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/atk12.jpg">
                <p></p>
            </div>
            <div class="col-4">
                <img src="images/atk2.jpg">
                <p></p>
            </div>
            <div class="col-4">
                <img src="images/atk3.jpg">
                <p></p>
            </div>
            <div class="col-4">
                <img src="images/atk4.jpg">
                <p></p>
            </div>
            <div class="col-4">
                <img src="images/atk5.jpg">
                <p></p>
            </div>
            <div class="col-4">
                <img src="images/atk6.jpg">
                <p></p>
            </div>
            <div class="col-4">
                <img src="images/atk7.jpg">
                <p></p>
            </div>
            <div class="col-4">
                <img src="images/atk8.jpg">
                <p></p>
            </div>
        </div>
        <h2 class="title"> 3. PANTRI </h2>
        <div class="row">
            <div class="col-4">
                <img src="images/pantri29.jpg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/pantri28.jpg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/pantri8.jpg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/pantri27.jpg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                    <img src="images/pantri20.jpg">
                    <div class="rating">
                    </div>
                </div>
                <div class="col-4">
                    <img src="images/pantri21.jpg">
                    <div class="rating">
                    </div>
                </div>
                <div class="col-4">
                    <img src="images/pantri22.jpg">
                    <div class="rating">
                    </div>
                </div>
                <div class="col-4">
                    <img src="images/pan1.jpg">
                    <div class="rating">
                    </div>
                </div>
                <div class="col-4">
                    <img src="images/pan2.jpg">
                    <div class="rating">
                    </div>
                </div>
                <div class="col-4">
                    <img src="images/pan3.jpg">
                    <div class="rating">
                    </div>
                </div>
                <div class="col-4">
                    <img src="images/pan4.jpg">
                    <div class="rating">
                    </div>
                </div>
                <div class="col-4">
                    <img src="images/pan5.jpg">
                    <div class="rating">
                    </div>
                </div>
            </div>
                <h2 class="title">Klien Pengadaan Barang.</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/samsung.jpg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/download1.png">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/download2.png">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/download3.png">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/download4.png">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/download5.png">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/download (2).jpg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/panasonic.jpg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/jfe (1).jpeg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/jfe (2).jpeg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/yayasan.jpeg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/download (1).jpg">
                <div class="rating">
                </div>
            </div>
        </div>
            </div>
            <h2 class="title">Klien Pengadaan Jasa.</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/sign in.jpg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/download.jpg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/Pertamina Logo.jpg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/tut.jpg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/indo.jpg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/p (2).jpeg">
                <div class="rating">
                </div>
            </div>
            <div class="col-4">
                <img src="images/persi.jpeg">
                <div class="rating">
                </div>
            </div>
        </div>
    </div>
    
    <!-- --------------- offer --------------- -->

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/keranjang.png" class="offer-img">
                </div>
                <div class="col-2">
                    <h1>Pemesanan Tiket </h1>
                    <small>tiket merupakan salah satu perusahaan travel online terbesar dan terlengkap di Indonesia yang menawarkan tiket traveling,tiket hotel, wisata, tiket acara, ...
                        .<br></small>
                    <a href="" class="btn">Pesan Now&#8594</a>
                </div>
            </div>
        </div>
    </div>
    <div class="after">
                    <h1 align="center"> Lokasi Perusahaan Proveed Esperti </h1>
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7932.1160101927835!2d106.81820537770993!3d-6.256089199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3bf1dd795d7%3A0xd181d65aad2174ea!2sRav%20Office%20%7C%20Virtual%20Office%20%7C%20Service%20Office%20%7C%20CoWorking!5e0!3m2!1sid!2sid!4v1720528690354!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a href="lokasi.php" class="btn">Lihat Skarang&#8594</a>
    </div>

    <!-- --------------------- testimonials -------------- -->

    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Penilaian wisata Indonesia secara keseluruhan cukup positif. Indonesia memiliki banyak sekali daya tarik wisata alam dan budaya yang menarik untuk dikunjungi, seperti pantai yang indah..</p>
                    <div class="rating">
                       
                    </div>
                    <img src="#" alt="">
                    <h3>jualianti  <span>astuti</span></h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Pulau Dewata Bali adalah destinasi wisata yang memiliki banyak keunggulan, seperti keindahan alam, keanekaragaman budaya, dan keramahan penduduk lokal. Dengan beberapa perbaikan..!</p>
                    <div class="rating">
                      
                    </div>
                    <img src="#" alt="">
                    <h3>   Hendriyansah   <span>julfikar</span></h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Pulau Dewata Bali merupakan salah satu destinasi wisata paling populer di Indonesia dan dunia. Keindahan alamnya yang luar biasa, keanekaragaman budayanya yang kaya, dan keramahan..</p>
                    <div class="rating">
                       
                    </div>
                    <img src="#" alt="">
                    <h3>Siti <span>Amelia</span></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------- brands --------------------  -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    
                </div>
                <div class="col-5">
                    
                </div>
                <div class="col-5">
                    
                </div>
                <div class="col-5">
                    
                </div>
                <div class="col-5">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- -------------- footer -------------------- -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-6 footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios Mobile Phone.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="">
                        <img src="images/app-store.png" alt="">
                    </div>
                </div>
                <div class="col-6 footer-col-2">
                    <a class="f-logo">
                        <h1>Proveeed </h1> <span>Esperti</span></h1>
                    </a>
                    <p>“ Menjadi sebuah perusahaan yang berkualita dan di percayai ole seluruh pelanggan. ”</p>
                </div>
                <div class="col-6 footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                    <li><a href="">instagram</a></li>
                    <li><a href="">whatsapp</a></li>
                    <li><a href="">facebook</a></li>
                    <li><a href="">email</a></li>
                    <li><a href="">linkedin</a></li>
                    </ul>
                </div>
                <div class="follow-us">
        <h3>Follow Us</h3>
        <div class="social-icons">
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
            <a href="mailto:info@example.com" class="social-icon"><i class="far fa-envelope"></i></a>
        </div>
    </div>

            </div>
            <hr>
            <p class="copyright">copyright-reserved@ahmadsaomadani</p>
        </div>
    </div>
</body>
</html>