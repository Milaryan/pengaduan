<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>{{ $judul }}</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href={{ asset("css/bootstrap.min.css") }}>
      <!-- style css -->
      <link rel="stylesheet" href={{ asset("css/style.css") }}>
      <!-- Responsive-->
      <link rel="stylesheet" href={{ asset("css/responsive.css") }}>
      <!-- fevicon -->
      <link rel="icon" href={{ asset("images/logo1.png") }} type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href={{ asset("css/jquery.mCustomScrollbar.min.css") }}>
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src={{ asset("images/loading.gif") }} alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
        @include('masyarakat.partial.header')
      <!-- end header -->
      <section >
         <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
            {{-- <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol> --}}
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption">
                              <h1>Selamat Datang di <strong class="color">AP2M</strong></h1>
                              <p>AP2M adalah singkatan dari Aplikasi Pelaporan Pengaduan Masyarakat yang baru diluncurkan oleh pemerintah Mojokerto.</p>
                           </div>
                        </div>
                        {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                               <figure><img style="border-radius: 35px;" src="images/alunalun.png" alt="img"/></figure>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- about -->
    <div id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="about-box">
                    <br>
                    <div class="white-bg">
                        <span>Cepat & Tanggap</span>
                    </div>
                </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="about-box">
                    <br>
                    <div class="white-bg">
                        <span>Terpercaya</span>
                    </div>
                </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="about-box">
                    <br>
                    <div class="white-bg">
                        <span>Data Tersimpan Rapat</span>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="about-box">
                <div class="titlepage">
                    <h2>Tentang Kami</h2>
                    <span>Kami adalah salah satu upaya pemerintah untuk menyediakan layanan pengaduan kepada masyarakat demi mempermudah kedekatan antara pemerintah dengan masyarakat dalam menyelesaikan masalah di lingkungan sekitar Mojokerto.</span>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end about -->
      <!-- pengaduan -->
      <div id="cara" class="plants">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2>Membuat Pengaduan</h2>
                     <span>Cara Membuat Pengaduan Dapat Di Lakukan Sebagai Berikut :</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="plants-box">
                     <figure><img src={{ asset("images/ss.png") }} alt="img"/></figure>
                     <h3> Pertama </h3>
                     <p>Silahkan login terlebih dahulu sebelum membuat pengaduan. Setelah melakukan Login anda akan diarahkan ke halaman Home, lihat bagian atas lalu cari dan klik pengaduan</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="plants-box">
                     <figure><img src={{ asset("images/ss1.png") }} alt="img"/></figure>
                     <h3> Kedua</h3>
                     <p>Anda akan diarahkan pada form pengaduan, isi form sesuai dengan masalah yang terjadi tanpa melebih-lebihkan. Sertakan foto apabila ada dan diperlukan. Klik tombol submit untuk mengirim.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="plants-box">
                     <figure><img src={{ asset("images/gb1.jpg") }} alt="img"/></figure>
                     <h3> Ketiga</h3>
                     <p>Setelah menekan tombol submit silahkan tunggu laporan pengaduan anda sampai proses selesai. Silahkan hubungi (0321) 321750 atau media social kami apabila terdapat masalah genting atau perlu diselesaikan secepatnya</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end pengaduan -->
      <!--Gallery -->
      <div id="pengaduan" class="Gallery">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Form Pengaduan </h2>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid margin-r-l">
        <form >
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <label for="nik">NIK</label>
                  <input class="form-control" placeholder="Masukkan NIK" type="text" name="nik" value="{{ Auth::user()->nik }}">
               </div>
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <label for="tgl_pengaduan">Tanggal Pengaduan</label>
                  <input class="form-control" placeholder="Tanggal Pengaduan" type="date" name="tgl_pengaduan" value="{{ date('Y-m-d') }}">
               </div>
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <label for="isi">Isi Pengaduan</label>
                  <textarea class="textarea>" rows="3" placeholder="Masukkan Isi Pengaduan" type="text" name="pengaduan">{{ old('pengaduan') }}</textarea>
               </div>
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <label for="foto" class="form-label">Foto</label> <sup>*format .jpg, .jpeg, .png</sup>
                    <input type="file" class="form-control" id="sampul" name="foto" placeholder="Tambahkan Foto Bila Ada" value="{{ old('foto') }}">
               </div>
               <button class="btn btn-info" style="margin: 15px"> submit </button>
            </div>
         </form><br>
         {{-- <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/1.jpg" class="fancybox" rel="ligthbox">
                     <img  src="images/1.jpg" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/1.jpg" class="fancybox" rel="ligthbox">View</a>
                     </span>
                  </figure>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/2.jpg" class="fancybox" rel="ligthbox">
                     <img  src="images/2.jpg" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/1.jpg" class="fancybox" rel="ligthbox">View</a>
                     </span>
                  </figure>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/3.jpg" class="fancybox" rel="ligthbox">
                     <img  src="images/3.jpg" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/3.jpg" class="fancybox" rel="ligthbox">View</a>
                     </span>
                  </figure>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/4.jpg" class="fancybox" rel="ligthbox">
                     <img  src="images/4.jpg" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/4.jpg" class="fancybox" rel="ligthbox">View</a>
                     </span>
                  </figure>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/5.jpg" class="fancybox" rel="ligthbox">
                     <img  src="images/5.jpg" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/5.jpg" class="fancybox" rel="ligthbox">View</a>
                     </span>
                  </figure>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/6.jpg" class="fancybox" rel="ligthbox">
                     <img  src="images/6.jpg" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/6.jpg" class="fancybox" rel="ligthbox">View</a>
                     </span>
                  </figure>
               </div>
            </div>
         </div> --}}
      </div>
      <!-- end Gallery -->
      <!--contact -->
      {{-- <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 paddimg-right">
                  <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                     </div>
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="map_section">
                           <figure><img src="images/map.jpg"></figure>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 paddimg-left">
                  <div class="Nursery-img">
                     <figure>
                        <img src="images/contactimg.jpg" alt="img"/>
                        <div class="text-box">
                           <h3>Best Green Nursery</h3>
                        </div>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- end contact -->
      <!-- footer -->
        @include('masyarakat.partial.footer')
      <!-- end footer -->
      <!-- Javascript files-->
      <script src={{ asset("js/jquery.min.js") }}></script>
      <script src={{ asset("js/popper.min.js") }}></script>
      <script src={{ asset("js/bootstrap.bundle.min.js") }}></script>
      <script src={{ asset("js/jquery-3.0.0.min.js") }}></script>
      <script src={{ asset("js/plugin.js") }}></script>
      <!-- sidebar -->
      <script src={{ asset("js/jquery.mCustomScrollbar.concat.min.js") }}></script>
      <script src={{ asset("js/custom.js") }}></script>
      <!-- javascript -->
      <script src={{ asset("js/owl.carousel.js") }}></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });

         $(".zoom").hover(function(){

         $(this).addClass('transition');
         }, function(){

         $(this).removeClass('transition');
         });
         });

      </script>
   </body>
</html>
