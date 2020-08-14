<style>
    .container2{
        width: 80%;
        margin: 100px auto;
    }
</style>
@extends('layouts.master')

@section('content')
<div class="container2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="font-size: 34px;" class="card-header">{{ __('Daftar') }}</div>

                <div class="card-body" style="    box-shadow: 0px 2px 16px 0px rgba(180, 180, 180, 0.2);">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="gender" class="col-md-4 col-form-label text-md-right">
                            {{ __('Jenis Kelamin') }}
                        </label>

                        <div class="col-md-6">
                            <select name="jenis_kelamin" id="gender" class="form-control">
                                @foreach ($genders as $gender)
                                    <option value="{{ $gender }}">
                                        {{ $gender }}
                                    </option>
                                @endforeach
                            </select>

                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                        
                    <div class="form-group row">
                    <label for="nomor_telepon" class="col-md-4 col-form-label text-md-right">
                        {{ __('Nomor Telepon') }}
                    </label>

                    <div class="col-md-6">
                        <input id="nomor_telepon" type="number" class="form-control @error('no_telp') is-invalid @enderror" name="nomor_telepon" value="{{ old('nomor_telepon') }}" required autocomplete="nomor_telepon" autofocus>

                        @error('nomor_telepon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>    
                        
                    <div class="form-group row">
                    <label for="nomor_whatsapp" class="col-md-4 col-form-label text-md-right">
                        {{ __('Nomor Whatsapp') }}
                    </label>
                    <div class="col-md-6">
                        <input id="nomor_whatsapp" type="number" class="form-control @error('nomor_whatsapp') is-invalid @enderror" name="nomor_whatsapp" value="{{ old('nomor_whatsapp') }}" required autocomplete="nomor_whatsapp" autofocus>

                        @error('nomor_whatsapp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div> 
                        
                    <div class="form-group row">
                    <label for="alamat_lengkap" class="col-md-4 col-form-label text-md-right">
                        {{ __('Alamat Lengkap') }}
                    </label>
                    <div class="col-md-6">
                        <textarea placeholder="Masukan Alamat Lengkap" name="alamat_lengkap" id="alamat_lengkap" cols="30" rows="10" class="form-control @error('alamat_lengkap') is-invalid @enderror" name="alamat_lengkap" value="{{ old('alamat') }}" required autocomplete="alamat_lengkap" autofocus></textarea>

                        @error('alamat_lengkap')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>    


                <center>
                <hr>
                <label>
                <input type="checkbox" checked="checked" name="setuju">Saya telah membaca, mengerti, memahami, dan setuju peraturan Jelajah Studies <a href="#">[Syarat & Ketentuan]</a>
                </label>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary btn-lg" style="background-color: green; width:70%;">
                                    {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </center>
            </div>
        </div>
    </div>
</div>
@endsection
