<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IT Competition 2025</title>
  <link rel="icon" href="{{ asset('assets/images/ITC logo 2.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
</head>
<body>
  <div class="wrapperanimate">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="shadow"></div>
    <div class="shadow"></div>
    <div class="shadow"></div>
    <span>Loading</span>
</div>
  <nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('/assets/image/ITC logo 2.png') }}" alt="" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tentang">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kategori">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#galeri">Galeri</a>
          </li>
        </ul>
        <a href="#kategori" class="btn btn-primary daftar">Daftar Disini</a>
      </div>
    </div>
  </nav>
    <div class="floating-button">
      <a href="https://drive.google.com/drive/folders/1-1PzINb7Exo13VYBKC_g9UINX28EflgH?usp=sharing">
        <img src="{{ asset('/assets/image/floating.svg') }}" alt="" width="250px">
      </a>
    </div>
    <section class="hero text-center text-white d-flex flex-column justify-content-center align-items-center" style="overflow-x: hidden;">
      <div class="container">
        <div class="about-text">
          ITC 2025
        </div>
        <p class="lead">INFORMATION TECHNOLOGY COMPETITION</p>
        <p class="mb-4">Innovating for a Sustainable Future</p>
        <div class="countdown">
          <div class="time-box">
            <span id="days">00</span>
            <p>Days</p>
          </div>
          <div class="time-box">
            <span id="hours">00</span>
            <p>Hours</p>
          </div>
          <div class="time-box">
            <span id="minutes">00</span>
            <p>Minutes</p>
          </div>
          <div class="time-box">
            <span id="seconds">00</span>
            <p>Seconds</p>
          </div>
        </div>
        <button class="cta-button"><a href="#kategori">Daftar Disini</a></button>
      </div>
      <div class="background">
        <div class="building-left">
          <img src="{{ asset('/assets/image/f1_rumahkiri.png') }}" alt="" srcset="">
        </div>
        <div class="building-right">
          <img src="{{ asset('/assets/image/f1_rumahkanan.png') }}" alt="">
        </div>
        <div class="meteor-kanan">
          <img src="{{ asset('/assets/image/meteor.png') }}" alt="" width="800px">
        </div>
        <div class="bintang-atas">
          <img src="{{ asset('/assets/image/titik1.png') }}" alt="">
        </div>
        <div class="bintang-bawah">
          <img src="{{ asset('/assets/image/titik2.png') }}" alt="">
        </div>
      <div>
    </section>

    <section id="tentang" class="about py-5 text-center text-white">
      <div class="container">
        <div class="row">
          <div class="about-text col-12 mb-4">
            TENTANG ITC 2025
          </div>
          <div class="container">
          <div class="col-12 col-md-8 mx-auto d-flex justify-content-center">
            <div class="kotak-background">
              <img src="{{ asset('assets/image/kotak-tentang.png') }}" alt="" srcset="">    
              <div class="text">            
                IT Competition merupakan singkatan dari Information Technology Competition. 
                Acara tersebut merupakan salah satu acara tahunan dari 58 event DINUS FESTIVAL 
                yang diselenggarakan oleh Himpunan Mahasiswa Teknik Informatika Universitas 
                Dian Nuswantoro Semarang yang terdiri dari 2 lomba yaitu Web Design dan Web 
                Development. Tujuan dari lomba tersebut diantaranya menambah pengetahuan siswa, 
                dan mahasiswa di bidang IT serta untuk mempersiapkan strategi menghadapi kemajuan 
                teknologi saat ini, dan dimasa yang akan datang.
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section id="kategori" class="cat ">
      <div class="container kategori-judul">
        <div class="about-text">
          KATEGORI PERLOMBAAN
        </div>
      </div>

      <div class="container kategori-kolom my-5">
        <div class="row flex-column flex-lg-row">
          <div class="col mb-5">
            <div class="kartu position-relative d-flex justify-content-center">
              <img src="{{ asset('assets/image/kotak-kiri.png') }}" alt="..." class="img-fluid mb-3">
              <div class="text d-flex flex-column align-items-center justify-content-center">
                <span class="kategori-judul">WEB DESIGN</span>
                <img src="assets/image/gambar-kiri.png" alt="" srcset="" width="400" class="img-fluid mb-3">
                <a href="https://bit.ly/WebDesignITC2025" class="btn">
                  <img src="{{ asset('assets/image/button_daftar.svg') }}" alt="" class="img-fluid" srcset="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="kartu position-relative d-flex justify-content-center">
              <img src="{{ asset('assets/image/kotak-kanan.png') }}" class="img-fluid" alt="...">
                <div class="text d-flex flex-column align-items-center">
                  <span class="kategori-judul">WEB DEVELOPMENT</span>
                  <img src="{{ asset('assets/image/gambar-kanan.png') }}" alt="" srcset="" width="300" class="imgwebdev img-fluid mb-3">
                  <a href="https://bit.ly/WebDevelopmentITC2025" class="btn">
                    <img src="{{ asset('assets/image/button_daftar.svg') }}" alt="" class="img-fluid" srcset="">
                  </a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="titik"></div>
    </section>

    <section id="timeline" class="timeline text-center text-white d-flex flex-column align-items-center py-5" style="overflow-x: hidden;">
      <div class="container">
        <div class="about-text col-12 mb-4">
          TIMELINE
        </div>
      </div>
      <div class="main-container">
        <ul>
          <li>
            <h3 class="heading">PENDAFTARAN</h3>
            <p>10 Desember 2024 - 12 Januari 2025</p>
          </li>
          <li>
            <h3 class="heading">PENGUMPULAN PROPOSAL DAN DEMO</h3>
            <p>10 Desember 2024 - 14 Januari 2025</p>
          </li>
          <li>
            <h3 class="heading">PENILAIAN PROPOSAL DAN DEMO</h3>
            <p>15 - 16 Januari 2025</p>
          </li>
          <li>
            <h3 class="heading">PENGUMUMAN FINALIS</h3>
            <p>17 Januari 2025</p>
          </li>
          <li>
            <h3 class="heading">TECHNICAL MEETING</h3>
            <p>18 Januari 2025</p>
          </li>
          <li>
            <h3 class="heading">PELAKSANAAN LOMBA</h3>
            <p>23    Januari 2025</p>
          </li>
        </ul>
      </div>
      <div class="awan-kanan">
        <img src="{{ asset('/assets/image/awan-kanan.png') }}" alt="" width="350px">
      </div>
      <div class="awan-kiri">
        <img src="{{ asset('/assets/image/awan-kiri.png') }}" alt="" width="350px">
      </div>
      <div class="awan-kanan-bawah">
        <img src="{{ asset('/assets/image/awan-kanan-bawah.png') }}" alt="" width="350px">
      </div>
    </section>

    <section id="galeri" class="gallery py-5 text-center text-white">
      <div class="container">
        <div class="about-text col-12 mb-4">
          GALLERY
        </div>
      </div>
      <div class="container d-flex justify-content-center">
        <div class="carousel-container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('/assets/image/galeri.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('/assets/image/galeri1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('/assets/image/galeri2.jpg') }}" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="galeri-awan">
      <img src="{{ asset('/assets/image/awan-atas.png') }}" alt="" width="500px">
    </div>
    <div class="galeri-awan-bawah">
      <img src="{{ asset('/assets/image/awan-kiri.png') }}" alt="" width="350px">
    </div>
      </section>
      
      <section id="sponsor" class="sponsor py-5 text-center text-white">
        <div class="container sponsor-text">
          <div class="about-text col-12 mb-4">
            SPONSORED BY
          </div>
        </div>
  
        
  
        <div class="container">
          <div class="about-text col-12 mt-4">
            MEDIA PARTNER
          </div>
        </div>
        <div class="city-kiri">
          <img src="{{ asset('/assets/image/city-kiri.png') }}" alt="" width="320px">
        </div>
        <div class="city-kanan">
          <img src="{{ asset('/assets/image/city_kanan.png') }}" alt="" width="320px">
        </div>
        <div class="bintang"></div>
      </section>
  
      <footer class="footer">
        <div class="footer-container">
          <div class="footer-left">
            <img src="{{ asset('/assets/image/ITC logo 2.png') }}" alt="Logo" class="footer-logo">
            <p>
              Kami selalu terbuka dan menyambut pertanyaan Anda untuk tim kami. Jika ada pertanyaan, silahkan hubungi kami ya!
            </p>
          </div>
          <div class="footer-right">
            <h3>Contact</h3>
            <ul class="footer-contact">
              <li><i class="fab fa-instagram"></i> @hmtiudinus</li>
              <li><i class="fas fa-envelope"></i> udinus.hmti@gmail.com</li>
              <li><i class="fab fa-whatsapp"></i> 082328591635</li>
            </ul>
          </div>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      $(document).ready(function(){
      $(".preloader").fadeOut();
      })

      // Countdown Timer Logic
      const countdown = () => {
          const targetDate = new Date('Jan 23, 2025 23:59:59').getTime();
          const now = new Date().getTime();
          const gap = targetDate - now;
        
          const second = 1000;
          const minute = second * 60;
          const hour = minute * 60;
          const day = hour * 24;
        
          const days = Math.floor(gap / day);
          const hours = Math.floor((gap % day) / hour);
          const minutes = Math.floor((gap % hour) / minute);
          const seconds = Math.floor((gap % minute) / second);
        
          document.getElementById('days').innerText = days;
          document.getElementById('hours').innerText = hours;
          document.getElementById('minutes').innerText = minutes;
          document.getElementById('seconds').innerText = seconds;
        
          if (gap < 0) {
            document.querySelector('.countdown').innerHTML = "Event has started!";
          }
      };
      
      // Refresh countdown every second
      setInterval(countdown, 1000);
      </script>
</body>
</html>
