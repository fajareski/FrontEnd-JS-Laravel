<link rel="stylesheet" href="assets/css/beli.css">
@extends('layouts.master')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Beli Paket Belajar</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Beli Paket Belajar</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <form action="configakunsiswa.php" method="post" class="login"  >
          <div class="container">
            <div class="container2">
              <h1>Cara Beli Paket Belajar</h1>
          </div>
          <hr>
              <div class="form">
 
                  <label for="nama"><b>Pilih Paket</b></label>
                  <select name="place" id="places">
                      <option value="place1">...Pilih Paket...</option>
                      <option value="place1">Paket Kelas Online</option>
                      <option value="place1">Paket Kelas Tatap Muka</option>
                      <option value="place1">Paket Private Online</option>
                      <option value="place1">Paket Private Tatap Muka</option>
                      <option value="place1">Paket Try Out & E-Book</option>
                      <option value="place1">Paket Mandiri</option>
                  </select>

                  <label for="nama"><b>Jenjang</b></label>
                  <select name="place" id="places">
                      <option value="place1">...Pilih Jenjang...</option>
                      <option value="place1">(SD) Sekolah Dasar</option>
                      <option value="place1">(SMP) Sekolah Menengah Pertama</option>
                      <option value="place1">(SMA) Sekolah Menengah Atas</option>
                      <option value="place1">Sarjana/Diploma</option>
                      <option value="place1">Magister/Spesialis/Doktoral</option>
                      <option value="place1">Pascasarjana</option>
                  </select>
                  
                  <label for="nama"><b>Jurusan</b></label>
                  <select name="place" id="places">
                      <option value="place1">...Pilih Jurusan...</option>
                      <option value="place1">(IPA) Ilmu Pengetahuan Alam</option>
                      <option value="place1">(IPS) Ilmu Pengetahuan Sosial</option>
                      <option value="place1">Bahasa</option>
                  </select>
                  
                  <label for="nama"><b>Kelas</b></label>
                  <select name="place" id="places">
                      <option value="place1">...Pilih Kelas...</option>
                      <option value="place1">Kelas 1 SD</option>
                      <option value="place2">Kelas 2 SD</option>
                      <option value="place3">Kelas 3 SD</option>
                      <option value="place3">Kelas 4 SD</option>
                      <option value="place3">Kelas 5 SD</option>
                      <option value="place3">Kelas 6 SD</option>
                  </select>

                  <label for="nama"><b>Kelas</b></label>
                  <select name="place" id="places">
                      <option value="place1">...Pilih Kelas...</option>
                      <option value="place1">Kelas 7 SMP</option>
                      <option value="place2">Kelas 8 SMP</option>
                      <option value="place3">Kelas 9 SMP</option>
                  </select>

                  <label for="nama"><b>Kelas</b></label>
                  <select name="place" id="places">
                      <option value="place1">...Pilih Kelas...</option>
                      <option value="place1">Kelas 10 SMA</option>
                      <option value="place2">Kelas 11 SMA</option>
                      <option value="place3">Kelas 12 SMA</option>
                  </select>
                    
  
                  <label for="nama"><b>Mata Pelajaran</b></label>
                  <select name="place" id="places">
                      <option value="place1">...Pilih Mata Pelajaran...</option>
                      <option value="place1">(IPA) Ilmu Pengetahuan Alam</option>
                      <option value="place2">Matematika</option>
                      <option value="place3">Bahasa Indonesi</option>
                      <option value="place3">Bahasa Inggris</option>
                  </select>
  

                  <label for="nama"><b>Mata Pelajaran</b></label>
                  <select name="place" id="places">
                      <option value="place1">...Pilih Mata Pelajaran...</option>
                      <option value="place1">(IPS) Ilmu Pengetahuan Sosial</option>
                      <option value="place2">Matematika</option>
                      <option value="place3">Bahasa Indonesi</option>
                      <option value="place3">Bahasa Inggris</option>
                  </select>

                  <label for="nama"><b>Mata Pelajaran</b></label>
                  <select name="place" id="places">
                      <option value="place1">...Pilih Mata Pelajaran...</option>
                      <option value="place1">(TPA) Tes Potensi Akademik</option>
                      <option value="place2">Bahasa Inggris</option>
                  </select>

                  <label for="nama"><b>Program</b></label>
                  <select name="place" id="places">
                      <option value="place1">...Pilih Program...</option>
                  </select>
  
                  <label for="nama"><b>Gelombang</b></label>
                  <select name="place" id="places">
                      <option value="place1">...Pilih Gelombang...</option>
                  </select>


                  <label for="nama"><b>Durasi Bimbel</b></label>
                  <select name="place" id="places">
                      <option value="place1">...Pilih Durasi...</option>
                  </select>
                <hr>
                    <label>
                    <input type="checkbox" checked="checked" name="setuju">Saya telah membaca, mengerti, memahami, dan setuju peraturan Jelajah Studies <a href="#">[Syarat & Ketentuan]</a>
                    </label>
            
                    <a id="button" class="registerbtn" href="konfirmasipembelianpaket.php">Beli Paket</a></button>
                    </div>  
                    </form>
                    </div>
          </form>
    </section>

  </main><!-- End #main -->
  @endsection