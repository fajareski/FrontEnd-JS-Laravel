<link rel="stylesheet" href="assets/css/style-testi.css">
<link rel="stylesheet" href="assets/css/Style-login.css">


@extends('layouts.master')


  <!-- ======= Hero Section ======= -->
@section('content')
  <section id="hero">

    <div class="container">
      <div class="row d-flex align-items-center"">
      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
        <h1>Mau Bimbel ?</h1>
        <h1>Jelajah Studies Aja Yuk!</h1>
        <h2>Belajar Pasti lebih Mudah | Masuk UI Pasti Bisa</h2>




        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; color: white;">Masuk</button>
        <div id="id01" class="modal">
  
          <div class="modal-content animate">
            <div class="imgcontainer">
              <form action="{{ route('login') }}">
              <button id="submit" type="submit" style="color: white;">Masuk Siswa</button>
              </form>
              <form action="masukpengajar.html">
              <button id="submit" type="submit" style="color: white;">Masuk Pengajar</button>
              </form>
            </div>
        
            <div class="container2" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="color: white;">Cancel</button>
            </div>
          </div>
        </div>

        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto; color: white;">Daftar</button>
        <div id="id02" class="modal">
  
          <div class="modal-content animate">
            <div class="imgcontainer">
              <form action="{{ route('register') }}">
              <button id="submit" type="submit" style="color: white;">Daftar Siswa</button>
              </form>
              <form action="buatakunpengajar.html">
              <button id="submit" type="submit" style="color: white;">Daftar Pengajar</button>
              </form>
            </div>
        
            <div class="container2" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" style="color: white;">Cancel</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="assets/img/hero-img.png" class="img-fluid" alt="">
      </div>
    </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <p id="ket" data-aos="fade-in">
                Jelajah Studies adalah salah satu platform belajar online untuk meningkatkan mutu kualitas pendidikan siswa dan pengajar. Kami berkomitmen untuk fokus dalam dunia pendidikan di berbagai level dengan basis offline / tatap muka dan online sebagai instrumen pelayanan kami. JelajahStudies menawarkan berbagai macam video belajar berlangganan, online private / group, kelas tatap muka, online try out, dan lain-lain yang dapat membantu siswa dalam meraih impian dan cita-citanya
              </p>
              <br>
              <p id="ket" data-aos="fade-in">
                JelajahStudies (JS) berafiliasi dengan BimbelMasukUI (BMUI) untuk membantu peserta fokus belajar. JS & BMUI berhasil mempersiapkan peserta menghadapi ujian masuk PTN favorit dengan metode belajar yang efektif. Berpengalaman > 8 tahun dan > 5000 alumni dari seluruh Indonesia telah berhasil lulus program S1, S2, dan S3 di PTN favorit Pengajar yang berkualitas dan berpengalaman > 5 tahun membuat materiajar asli dan membahas minimal 500 soal ujian sesuai dengan jenjang mata pelajaran.
              </p>
              <h3 data-aos="fade-in" data-aos-delay="100">Kenapa memilih JS dan BMUI ?</h3>
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <p>Belajar dengan suasana yang kondusif dan fundengan penjelasan yang deskriptif & argumentatif</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <p>Terdapat sesi tambahan belajar kelompok (TPA, English, Psikotes, dan Wawancara)</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <p> Guru-guru yang bersedia menjawab pertanyaan seputar materi dan soal kapanpun dan dimanapun </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <p>Mendapatkan try out online & offline disertai denganpembahasan soal yang sistematis, efektif, dan mudah dimengerti</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <p>Dibekali buku materi ajar yang best seller dan soal-soal ujian yang riil sesuai dengan ujian yang sesungguhnya</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <p>Drilling psikotes, wawancara, kemampuan menulis essai dan CV</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">PAKET BELAJAR JELAJAH STUDIES</h2>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-1.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Paket Kelas Online</a></h5>
                <p class="card-text"><ul id="isi-pro">
                  <li>
                      Modul Ajar, Kuis & Latihan Soal
                  </li>
                  <li>
                      Try Out Online
                  </li>
                  <li>
                      Kelas Online Streaming
                  </li>
                  <li>
                      Video Materi Ajar & Pembahasan Soal
                  </li>
                  <li>
                      Grup Chatting Pengajar & Murid
                  </li>
              </ul></p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-2.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Paket Kelas Tatap Muka</a></h5>
                <p class="card-text"><ul id="isi-pro">
                  <li>
                      Modul Ajar, Kuis & Latihan Soal
                  </li>
                  <li>
                      Try Out Online
                  </li>
                  <li>
                      Kelas Tatap Muka
                  </li>
                  <li>
                      Video Materi Ajar & Pembahasan Soal
                  </li>
                  <li>
                      Grup Chatting Pengajar & Murid
                  </li>
              </ul></p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-3.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Paket Private Online</a></h5>
                <p class="card-text"><ul id="isi-pro">
                  <li>
                      Modul Ajar, Kuis & Latihan Soal
                  </li>
                  <li>
                      Try Out Online
                  </li>
                  <li>
                      Kelas Private Online
                  </li>
                  <li>
                      Video Materi Ajar & Pembahasan Soal
                  </li>
                  <li>
                      Grup Chatting Pengajar & Murid
                  </li>
              </ul></p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-4.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Paket Private Tatap Muka</a></h5>
                <p class="card-text"><ul id="isi-pro">
                  <li>
                      Modul Ajar, Kuis & Latihan Soal
                  </li>
                  <li>
                      Try Out Online
                  </li>
                  <li>
                      Kelas Privat Tatap Muka
                  </li>
                  <li>
                      Video Materi Ajar & Pembahasan Soal
                  </li>
                  <li>
                      Grup Chatting Pengajar & Murid
                  </li>
              </ul></p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-5.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Paket Try Out & E-book</a></h5>
                <p class="card-text"><ul id="isi-pro">
                  <li>
                      Modul Ajar, Kuis & Latihan Soal
                  </li>
                  <li>
                      Try Out Online
                  </li>
              </ul></p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-6.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Paket Mandiri</a></h5>
                <p class="card-text"><ul id="isi-pro">
                  <ul id="isi-pro">
                    <li>
                        Modul Ajar, Kuis & Latihan Soal
                    </li>
                    <li>
                        Try Out Online
                    </li>
                    <li>
                        Video Materi Ajar & Pembahasan Soal
                    </li>
                    <li>
                        Grup Chatting Pengajar & Murid
                    </li>
                </ul></p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Keunggulan Jelajah Studies</h2>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="assets/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left">
            <h3>Pengajar Ahli & Seru</h3>
            <p class="font-italic">
              Belajar di Jelajah Studies tidak akan terasa melelahkan karena pengajarnya tahu cara mudah mengerjakan soal dengan efektif dan efisien. Disusun oleh tutor yang berpengalaman dibidangnya.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>Soal - Soal Asli dan Update Kurikulum</h3>
            <p class="font-italic">
              Jelajah Studies sudah mengkompilasi seluruh soal UN,SBMPTN, SIMAK UI dan Ujian Mandiri dalam 10 tahun terakhir untuk persiapan terbaik ujian kamu dengan kurikulum yang selalu di update.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="assets/img/features-3.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
            <h3>Fitur Lengkap dan Mudah Digunakan</h3>
            <p>Fitur-fitur di Jelajah Studies yang lengkap dan mudah untuk dipahami baik oleh siswa atau pengajar sehingga penyampaian dalam pembelajaran menjadi lebih mudah dan dapat diakses dimana dan kapanpun.</p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Testimoni ======= -->
<section class="backg">
    <div class="section-title">
      <h2 data-aos="fade-in">Testimoni</h2>
    </div>
    <section class="testimonials">
      <div class="container">
          <br><br><br>
          <div class="col-sm-12">
              <div id="customers-testimonials" class="owl-carousel">
                  <div class="item">
                      <div class="shadow-effect">
                          <img src="assets/img/testi/1.jpg" class="img-circle" alt="">
                          <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptatibus unde officiis nostrum at sequi ipsa asperiores quam sapiente numquam itaque eius, esse dolores debitis ex? Cum tempora obcaecati repellendus.
                          </p>
                      </div>
                      <div class="testimonial-name">
                        Jelajah Studies
                      </div>
                  </div>
                  
                 <div class="item">
                      <div class="shadow-effect">
                          <img src="assets/img/testi/2.jpg" class="img-circle" alt="">
                          <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptatibus unde officiis nostrum at sequi ipsa asperiores quam sapiente numquam itaque eius, esse dolores debitis ex? Cum tempora obcaecati repellendus.
                          </p>
                      </div>
                      <div class="testimonial-name">
                        Jelajah Studies
                      </div>
                  </div>
                  
                  
                   <div class="item">
                      <div class="shadow-effect">
                          <img src="assets/img/testi/03.jpg" class="img-circle" alt="">
                          <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptatibus unde officiis nostrum at sequi ipsa asperiores quam sapiente numquam itaque eius, esse dolores debitis ex? Cum tempora obcaecati repellendus.
                          </p>
                      </div>
                      <div class="testimonial-name">
                        Jelajah Studies
                      </div>
                  </div>
                  
                  
                  <div class="item">
                      <div class="shadow-effect">
                          <img src="assets/img/testi/06.jpg" class="img-circle" alt="">
                          <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptatibus unde officiis nostrum at sequi ipsa asperiores quam sapiente numquam itaque eius, esse dolores debitis ex? Cum tempora obcaecati repellendus.
                          </p>
                      </div>
                      <div class="testimonial-name">
                        Jelajah Studies
                      </div>
                  </div>
                  
                  
                  <div class="item">
                      <div class="shadow-effect">
                          <img src="assets/img/testi/04.jpg" class="img-circle" alt="">
                          <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptatibus unde officiis nostrum at sequi ipsa asperiores quam sapiente numquam itaque eius, esse dolores debitis ex? Cum tempora obcaecati repellendus.
                          </p>
                      </div>
                      <div class="testimonial-name">
                          Jelajah Studies
                      </div>
                  </div>
    </section>
  </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Team</h2>
          <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up">
              <div class="pic"><img src="assets/img/team/team-1.jpg" alt=""></div>
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-2.jpg" alt=""></div>
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-3.jpg" alt=""></div>
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-4.jpg" alt=""></div>
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Pricing</h2>
          <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box" data-aos="zoom-in">
            <h3>Free</h3>
            <h4>$0<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

          <div class="col-lg-4 box featured" data-aos="zoom-in">
            <span class="featured-badge">Featured</span>
            <h3>Business</h3>
            <h4>$29<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

          <div class="col-lg-4 box" data-aos="zoom-in">
            <h3>Developer</h3>
            <h4>$49<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Pertanyaan Seputar Jelajah Studies</h2>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Kemana dan bagaimana saya harus mendaftar?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Silahkan mendaftar online di website http://jelajahstudies.com atau menghubungi kami di 085284877333
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Layanan belajarnya seperti apa?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Kami melayani jasa pendidikan non-formal mulai level baca, tulis, hitung, sd, smp, sma dan persiapan masuk TPN serta ujian terkait baik secara online dan tatap muka dengan sistem belajar di kelas dan atau privat / kelompok tatap muka.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Apa saja layanan Jelajah Studies?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              http://jelajahstudies.com/produk-kami
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Bagaimana Cara mendapat fitur Online?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Silahkan registrasi di website kami, http://jelajahstudies.com dan menggunakan voucer berlangganan sesuai kebutuhan materi pelajaran / ujian berdasarkan kebutuhan waktunya apakah sekali pakai, 1 bulan, 3 bulan, 6 bulan atau setahun.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->
        </div><!-- End F.A.Q Item-->

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Kontak Kami</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>Alamat</h3>
                  <p>GF2 Atlanta Apartemen
                    Jln. Margondaraya no. 28, Depok</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>jelajahstudies@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Kontak Pelayanan</h3>
                  <p>085284877333<br>0817842419</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg">
  <div class="container">
    
    <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

      <div class="col-lg-2 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" data-aos="flip-right">
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="100">
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="200">
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="300">
        </div>
      </div>

      <!-- <div class="col-lg-2 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="400">
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/client-6.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="500">
        </div>
      </div> -->

    </div>

  </div>
</section><!-- End Clients Section -->
@endsection