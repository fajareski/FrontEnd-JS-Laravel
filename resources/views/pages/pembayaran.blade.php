<style>
    .container{
        height:800px
    }
    @media (max-width: 768px){
        .petunjuk{
            font-size: 14px;
        }
        .container{
        height:1200px
        }
    }
    .button{
        background-color: green;
        color: white;
        padding: 8px;
        border-radius: 5px;
    }

    .button:hover{
        background-color: #00600f;
    }
    .last{
        margin: 30px auto;
    }
    .selimut{
        width: 80%;
        display: block;
        margin-right: auto;
        margin-left: auto;
        margin-top: 50px;
        background-color: white;
        padding: 20px;
    }
</style>
@extends('layouts.dash')

@section('content')
<section class="container">
<div class="selimut">
    <div>
        <h2> Silahkan Melakukan Pembayaran ke Rekening di bawah ini </h2>
        <p class="petunjuk">Harap melakukan pembayaran melalui Rekening :</p>
        <img src="/assets/img/BNI.svg" class="mb-2" style="display: inline;" alt="BNI"> <p class="font-weight-bold " style="display: inline; font-size:20px;">A.N ACHMAD FAJAR RESKI</p>
        <p style="display: block;" class="mt-4">No. Rekening :</p><span style="color: green; font-size:30px;" id="myInput">0166229929</span> 
    </div>
<p style="border-bottom:solid 1px #e8e8e8"></p>
    <div>
        <p>Setelah melakukan pembayaran diharapkan melakukan konfirmasi pembayaran, kemudian silahkan untuk mengaktivasi voucher yang telah dibeli.</p>
        <p class="font-weight-bold ">Kode Transaksi:</p>
        <p class="font-weight-bold ">Pembayaran harus dilakukan sebelum tanggal Jam</p>
        <a href="{{ url('/konfirmasibayar') }}" class="button">Konfirmasi Pembayaran</a>
    </div>
    <div class="last">
        <p>
        Jika terjadi masalah atau kesulitan untuk proses aktivasi, silahkan menghubungi ke nomor whatsapp : <span class="font-weight-bold" style="color: green;">0852-8487-7333</span>. Informasikan Kode Transaksi, Nama Lengkap & No. HP yang Anda gunakan. Terimakasih :)
        </p>
    </div>

</div>
</section>
@endsection