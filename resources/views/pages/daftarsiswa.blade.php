<link rel="stylesheet" href="assets/css/Style-regiter.css">
@extends('layouts.master')
@section('content')
<main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Buat Akun Siswa</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Buat akun Siswa</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs Section -->

<section class="inner-page">
  <div class="container">
    <hr>
        <div class="form">

            <label for="nama"><b>Nama</b></label>
            <input type="text" placeholder="Nama Lengkap..." name="username" id="Nama" required>

            <label for="nama"><b>Nama Panggilan</b></label>
            <input type="text" placeholder="Nama Panggilan..." name="nama_panggilan" id="Nama" required>

            <label for="nama"><b>Asal Sekolah atau Perguruan Tinggi</b></label>
            <input type="text" placeholder="Nama Lengkap..." name="asal_sekolah_universitas" id="Nama" required>

            <label for="nama"><b>Jurusan</b></label>
            <input type="text" placeholder="Nama Lengkap..." name="jurusan" id="Nama" required>
            
            <label for="nama"><b>Email</b></label>
            <input type="text" placeholder="Masukkan E-mail..." name="email" id="E-mail" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Masukan Password...." id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <div id="message">
                <h3>Kata sandi harus seperti memiliki:</h3>
                <p id="letter" class="invalid"> Ada Huruf<b> kecil</b></p>
                <p id="capital" class="invalid"> Ada Huruf<b> Besar (Kapital)</b></p>
                <p id="number" class="invalid">Ada <b>Nomor</b></p>
                <p id="length" class="invalid">Minimal <b>8 kata</b></p>
              </div>
            
            <label for="nama"><b>Jenis Kelamin</b></label>
            <select name="jenis_kelamin" id="places">
                <option value="place1">...Pilih Jenis Kelamin...</option>
                <option value="place1">Pria</option>
                <option value="place2">Wanita</option>
                <option value="place3">Lainnya</option>
            </select>
              

            <label for="nama"><b>Nomor Telepon</b></label>
            <input type="number" placeholder="Masukkan Nomor" name="nomor_telepon" id="No Hp" required>
            
            <label for="nama"><b>Nomor Whatsapp</b></label>
            <input type="number" placeholder="Masukkan Nomor" name="nomor_whatsapp" id="No Hp" required>

            <label for="nama"><b>Provinsi</b></label>
            <select name="provinsi" id="places">
                <option value="place1">...Pilih Provinsi...</option>
            </select>

            <label for="nama"><b>Kota / Kabupaten</b></label>
            <select name="kota_kabupaten" id="places">
                <option value="place1">...Pilih Kota / Kabupaten...</option>
            </select>

            <label for="nama"><b>Kecamatan</b></label>
            <select name="kecamatan" id="places">
                <option value="place1">...Pilih Kecamatan...</option>
            </select>
            <label for="nama"><b>Alamat Lengkap</b></label>
            <textarea placeholder="Masukan Alamat Lengkap" name="alamat_lengkap" id="Alamat" cols="30" rows="10"></textarea>
    <hr>
    <label>
    <input type="checkbox" checked="checked" name="setuju">Saya telah membaca, mengerti, memahami, dan setuju peraturan Jelajah Studies <a href="#">[Syarat & Ketentuan]</a>
    </label>

        <button type="submit" class="registerbtn" name="submit"><a id="button">Buat Akun</a></button>
        </div>  
        <div class="container signin">
        <p id="sudah"> Sudah punya Akun? <a href="loginsiswa.php">Masuk</a>.</p>
        </div>
        </form>
    <?php
         if(isset($_POST['submit'])){
         include 'koneksisiswa.php';
         if(!is_numeric($_POST['nomor_telepon'])){
             echo 'Nomor Telepon harus berupa angka';
         }else{
         $submit = mysqli_query($conn, "INSERT INTO akun_siswa VALUES (
         NULL,
         '".ucwords($_POST['username'])."',
         '".ucwords($_POST['nama_panggilan'])."',
         '".ucwords($_POST['asal_sekolah_universitas'])."',
         '".ucwords($_POST['jurusan'])."',
         '".ucwords($_POST['email'])."',
         '".ucwords($_POST['password'])."',
         '".ucwords($_POST['jenis_kelamin'])."',
         '".$_POST['nomor_telepon']."',
         '".$_POST['nomor_whatsapp']."',
         '".ucwords($_POST['provinsi'])."',
         '".ucwords($_POST['kota_kabupaten'])."',
         '".ucwords($_POST['kecamatan'])."',
         '".ucwords($_POST['alamat_lengkap'])."')");
         if($submit){
         echo 'berhasil daftar';
         }else {
         echo 'gagal daftar';
         }}
     }

    ?>
</section>

</main><!-- End #main -->

<script>
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");
    
    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
      document.getElementById("message").style.display = "block";
    }
    
    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
      document.getElementById("message").style.display = "none";
    }
    
    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
      // Validate lowercase letters
      var lowerCaseLetters = /[a-z]/g;
      if(myInput.value.match(lowerCaseLetters)) {  
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
      }
      
      // Validate capital letters
      var upperCaseLetters = /[A-Z]/g;
      if(myInput.value.match(upperCaseLetters)) {  
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }
    
      // Validate numbers
      var numbers = /[0-9]/g;
      if(myInput.value.match(numbers)) {  
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }
      
      // Validate length
      if(myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }
    </script>
@endsection