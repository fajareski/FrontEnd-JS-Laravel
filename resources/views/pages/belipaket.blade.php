<link rel="stylesheet" href="assets/css/beli.css">
<link href="assets/css/style.css" rel="stylesheet">
<style>
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
@extends('layouts.dash')

@section('content')

<main id="main">

    <section class="inner-page">
      <div class="container">
        <form action="configakunsiswa.php" method="post" class="login"  >
          <div class="container">
            <div class="container2">
              <h1>Beli Paket Belajar</h1>
          </div>
          <hr>

          <form id="regForm" action="{{ url('/invoice') }}">
          <!-- One "tab" for each step in the form: -->
          <div class="tab" style="font-size: 25px;"> Pilih Paket Belajar :
           <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

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
                <div class="read-more"><a href="#" onclick="nextPrev(1)" style="text-align: c;"><i class="icofont-arrow-right"></i>Beli Paket</a></div>
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
                <div class="read-more"><a href="#" onclick="nextPrev(1)"><i class="icofont-arrow-right"></i> Beli Paket</a></div>
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
                <div class="read-more"><a href="#" onclick="nextPrev(1)"><i class="icofont-arrow-right"></i> Beli Paket</a></div>
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
                <div class="read-more"><a href="#" onclick="nextPrev(1)"><i class="icofont-arrow-right"></i> Beli Paket</a></div>
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
                <div class="read-more"><a href="#" onclick="nextPrev(1)"><i class="icofont-arrow-right"></i> Beli Paket</a></div>
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
                <div class="read-more"><a href="#" onclick="nextPrev(1)"><i class="icofont-arrow-right"></i> Beli Paket</a></div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section><!-- End Services Section -->
          </div>
          <div class="tab">
                  <label for="nama"><b>Jenjang</b></label>
                  <select name="place" id="places">
                      <option oninput="this.className = ''"  value="place1">...Pilih Jenjang...</option>
                      <option oninput="this.className = ''"  value="place1">(SD) Sekolah Dasar</option>
                      <option oninput="this.className = ''"  value="place1">(SMP) Sekolah Menengah Pertama</option>
                      <option oninput="this.className = ''"  value="place1">(SMA) Sekolah Menengah Atas</option>
                      <option oninput="this.className = ''"  value="place1">Sarjana/Diploma</option>
                      <option oninput="this.className = ''"  value="place1">Magister/Spesialis/Doktoral</option>
                      <option oninput="this.className = ''"  value="place1">Pascasarjana</option>
                  </select>
                  <label for="nama"><b>Kelas</b></label>
                  <select name="place" id="places">
                      <option oninput="this.className = ''"  value="place1">...Pilih Kelas...</option>
                      <option oninput="this.className = ''"  value="place1">Kelas 1 SD</option>
                      <option oninput="this.className = ''"  value="place2">Kelas 2 SD</option>
                      <option oninput="this.className = ''"  value="place3">Kelas 3 SD</option>
                      <option oninput="this.className = ''"  value="place3">Kelas 4 SD</option>
                      <option oninput="this.className = ''"  value="place3">Kelas 5 SD</option>
                      <option oninput="this.className = ''"  value="place3">Kelas 6 SD</option>
                  </select>

                  <label for="nama"><b>Kelas</b></label>
                  <select name="place" id="places">
                      <option oninput="this.className = ''"  value="place1">...Pilih Kelas...</option>
                      <option oninput="this.className = ''"  value="place1">Kelas 7 SMP</option>
                      <option oninput="this.className = ''"  value="place2">Kelas 8 SMP</option>
                      <option oninput="this.className = ''"  value="place3">Kelas 9 SMP</option>
                  </select>

                  <label for="nama"><b>Kelas</b></label>
                  <select name="place" id="places">
                      <option oninput="this.className = ''"  value="place1">...Pilih Kelas...</option>
                      <option oninput="this.className = ''"  value="place1">Kelas 10 SMA</option>
                      <option oninput="this.className = ''"  value="place2">Kelas 11 SMA</option>
                      <option oninput="this.className = ''"  value="place3">Kelas 12 SMA</option>
                  </select>
                  <label for="nama"><b>Jurusan</b></label>
                  <select  name="place" id="places">
                      <option oninput="this.className = ''"  value="place1" >...Pilih Jurusan...</option>
                      <option oninput="this.className = ''"  value="place1">(IPA) Ilmu Pengetahuan Alam</option>
                      <option oninput="this.className = ''"  value="place1">(IPS) Ilmu Pengetahuan Sosial</option>
                      <option oninput="this.className = ''"  value="place1">(IPC) IPA & IPS</option>
                  </select>
          </div>
          <div class="tab">

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
          </div>
          <div style="overflow:auto;">
            <div style="float:right;">
              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
              <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
          </div>
          <!-- Circles which indicates the steps of the form: -->
          <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
          </div>
        </form>

        <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>



      
    </section>

  </main><!-- End #main -->
  @endsection