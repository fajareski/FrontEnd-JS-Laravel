<link rel="stylesheet" href="assets/css/Style-regiter.css">
<style>
    b{
        color: #4c8c4a;
        font-size: 16px;
    }
</style>
@extends('layouts.dash')

@section('content')
<div class="container2">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 ">
            <div class="card">
                <div style="font-size: 34px;" class="card-header">{{ __('Konfirmasi Pembayaran') }}</div>

                <div class="card-body" style="    box-shadow: 0px 2px 16px 0px rgba(180, 180, 180, 0.2);">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                        <label for="nama"><b>Paket Belajar</b></label>
                            <input type="text" placeholder="Nama paket balajar yang dibeli..." name="username" id="Nama" required>

                        <label for="nama"><b>Nama Pemilik Rekening </b></label>
                            <input type="text" placeholder="Nama Pemilik Rekening (Nama Bank)" name="nama_panggilan" id="Nama" required>

                        <label for="nama"><b>Nomor Rekening</b></label>
                            <input type="text" placeholder="Nomor Rekening..." name="asal_sekolah_universitas" id="Nama" required>

                        <label for="nama"><b>Nominal Transfer</b></label>
                            <input type="text" placeholder="Nominal Transfer..." name="jurusan" id="Nama" required>

                        <label for="nama"><b>Kode Transaksi Pembelian</b></label>
                            <input type="text" placeholder="Nomor Transaksi Pembelian..." name="jurusan" id="Nama" required>
                            
                        <label for="nama"><b>Upload Bukti Pembayaran </b></label>
                            <input type="file" class="ml-3" name="jurusan" id="Nama" required>

                            </div>
                        </div>
      
                <hr>

            </div>
        </div>
    </div>
</div>
@endsection