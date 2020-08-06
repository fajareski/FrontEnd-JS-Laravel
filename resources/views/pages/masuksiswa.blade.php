<link rel="stylesheet" href="assets/css/login.css">
@extends('layouts.master')
@section('content')
<main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Masuk Akun Siswa</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Masuk Akun Siswa</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs Section -->

<section class="inner-page">
  <div class="container">
    <form action="configakunsiswa.php" method="post" class="login"  >
        
        <div class="container">
        <h2 class="judul">Login Sebagai Siswa</h2>
      </div>
      <hr>
          <div class="form">
              <label for="nama"><b>E-mail</b></label>
              <input type="email" placeholder="Masukkan E-mail..." name="email" id="Masukkan Email" required>


              <label for="nama"><b>Password</b></label>
              <input type="password" placeholder="Ketikkan Password..." name="password" id="Password" required>
      </hr>
              <label>
              <a href="#">Lupa Password ?</a>
              </label>
              <button type="submit" class="registerbtn" name="masuk"><a id="button" >Login</a></button>
              <p> Belum punya Akun? <a href="buatakunsiswa.html">Buat Akun</a>.</p>
          </div>
          </div>
      </form>
</section>

</main><!-- End #main -->

@endsection