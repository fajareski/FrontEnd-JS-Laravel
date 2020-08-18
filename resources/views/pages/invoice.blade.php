<style>
    .invoice{
        margin-top: 50px;
        padding: 20px;
        background-color: #c8e6c9;
    }
    .bayar{
        display: block;
        width: 20%;
        margin-top: 20px;
        background-color: green;
        padding:10px;
        border-radius: 10px;
    }
    .button{
        text-align: center;
        color: white;
        font-size: 18px;
    }
    .harga{
        border: none;
        width: 320px; 
        height: 50px;
    }
</style>
@extends('layouts.dash')

@section('content')
    <section class="container">
        <div class="invoice">
            <h1> Total Pembelian</h1>
                <ul>Paket Belajar</ul>
                <ul>Jenjang</ul>
                <ul>Kelas</ul>
                <ul>Jurusan</ul>
                <ul>Mata Pelajaran</ul>
                <ul>Program Bimbel</ul>
                <ul>Durasi Bimbel</ul>
        </div>

        <div class="total" >
            <h3 class="mt-5" >Total Harga :</h3>
            <input type="text" class="harga">
        </div>
        <div class="bayar" style="margin-bottom: 400px;">
        <a href="{{ url('/pembayaran') }}" class="button text-center">Bayar</a>
        </div>
        
    </section>
@endsection