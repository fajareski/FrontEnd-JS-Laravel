
@extends('layouts.master2')

@section('content')
  <!DOCTYPE html>
<html>
 <head>
  <link type='text/css' rel='stylesheet' href='/assets/css/tostyle.css'/>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open Sans"/>
 </head>
 <body>
<section class="selimut" style="height: 1200px;">
  <div id='container'>
   <div id='title'>
    <h1>Try Out Matematika</h1>
   </div>
      <br/>
     <div id='quiz'></div>
      <div class='button' id='next'><a href='#'>Next</a></div>
      <div class='button' id='prev'><a href='#'>Prev</a></div>
      <div class='button' id='start'> <a href='#'>Start Over</a></div>
      <!-- <button class='' id='next'>Next</a></button>
      <button class='' id='prev'>Prev</a></button>
      <button class='' id='start'> Start Over</a></button> -->
     </div>
<div class="container2">

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
  <h4>Try Out</h4>
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
    <table><h2> List Try Out </h2>
        <tr> <h3 style="background-color: green; padding: 10px; color:white; text-align:center;"> Bagian 1 </h3>
            <td class="container2">
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 1 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 2 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 3 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 4 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 5 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 6 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 7 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 8 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 9 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green" >10</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">11</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">12</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">13</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">14</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">15</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">16</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">17</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">18</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">19</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">20</a>
            </td>
        </tr>
    </table>
    <table>
        <tr> <h3 style="background-color: green; padding: 10px; color:white; text-align:center;"> Bagian 2 </h3>
        <td class="container2">
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 21 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 22 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 23 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 24 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 25 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 26 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 27 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 28 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green"> 29 </a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green" >30</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">31</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">32</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">33</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">34</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">35</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">36</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">37</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">38</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">39</a>
            <a href="#" class="btn btn-outline-success" style="border: 1px solid green">40</a>
            </td>
        </tr>
        </table>
    </div> 
    
</section>

  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
  <script type="text/javascript" src='questions.json'></script>
  <script type='text/javascript' src='jsquiz.js'></script>
 </body>
</html>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


    <script src="/assets/js/index.js"></script>

  
</body>
</html>

@endsection