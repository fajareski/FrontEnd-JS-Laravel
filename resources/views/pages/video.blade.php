<style>
    .button{
        padding: 20px;
        color: white;
    }

    .green{
        float: right;
        background-color: green;
        border-radius: 20px;
    }

    .blue{
        float: left;
        background-color: blue;
        border-radius: 20px;
    }
</style>
@extends('layouts.master2')

@section('content')

<div id="mySidenav" class="sidenav">
  <a href="#" id="profil">
  <h4>Profil Siswa</h4>
  <div class="ket" style="font-size: 15px;">
  <ul>
    <li>Nama :</li>
    <li>Email :</li>
    <li>Nomor Ponsel :</li>
    <li>Alamat :</li>
  </ul>
  <button class="mt-2" style="float: left; color:black; border:none;"> Edit </button>
  </div>
  </a>
  <a href="#" id="blog">
  <h4>Paket Belajar</h4>
  <div class="ket" style="font-size: 15px;">
  <ul>
      <li>Jenjang :</li>
        <li>Jurusan :</li>
        <li>Kelas :</li>
        <li>Mata Pelajaran:</li>
        <li>Program Bimbel:</li>
        <li>Gelombang Bimbel:</li>
        <li>Kode Transaksi :</li>
  </ul>
  </div>
  </a>
  <a href="#" id="projects">
  <h4>Video</h4>
  <div class="ket" style="font-size: 15px;">
  <ul>
        <li>Judul :</li>
        <li>Kode:</li>
        <br><li>Judul :</li>
        <li>Kode:</li>
        <br><li>Judul :</li>
        <li>Kode:</li>
  </ul>
  </div>
  </a>
  <a href="#" id="contact">Jadwal Kelas</a>
</div>

<section style="width: 100%; height: 220%;">
    <div class="container">
        <h1 class="text-center"> Video </h1>
    </div>
    <center>
    <div class="container2" >
    <table class="mt-5">
        <tr>
            <td style="width: 200px;">
                <p>Judul Video :</p>
            </td>
            <td style="width: 200px;">
                <p>Kode Video :</p>
            </td>
            <td style="width: 200px;">
                <p>Chapter Video :</p>
            </td>
        </tr>
    </table>
    <iframe width="1060" height="700" class="mt-2" src="https://www.youtube.com/embed/QlEJ6hSI3rY" frameborder="2" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <hr class="mt-5">
    <div class="container">
        <h1 class="text-center"> Modul </h1>
    </div>
    <table class="mt-5">
        <tr>
            <td style="width: 200px;">
                <p>Judul Modul :</p>
            </td>
            <td style="width: 200px;">
                <p>Kode Modul :</p>
            </td>
            <td style="width: 200px;">
                <p>Chapter Modul :</p>
            </td>
        </tr>
    </table>
    </center>
    <div class="container ">
    <iframe src="https://docs.google.com/viewer?srcid=1Bc9NoTt7S2AQOy_2LLn5rf6949TS1FPe&amp;pid=explorer&amp;efh=false&amp;a=v&amp;chrome=false&amp;embedded=true" style="border: 2; height: 800px; width: 1100px;"></iframe> 
    </div>

    <div class="container mt-5 mb-5 ">
        <a href="#" class="button green">Selanjutnya</a>
        <a href="#" class="button blue">Sebelumnya</a>
    </div>
</section>
@endsection