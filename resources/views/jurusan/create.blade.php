@extends('template')
@section('judul_halaman','')
@section('konten')
 <div class="container mt-5 mb-5">
 <div class="row">
 <div class="col-md-12">
 <div class="card border-0 shadow rounded">
 <div class="card-body">
 <form action="{{ route('jurusan.store') }}" method="POST" 
enctype="multipart/form-data"> 
 @csrf 
 <div class="form-group">
 <label class="font-weight-bold">NAMA JURUSAN</label>
 <input type="text" class="form-control 
@error('nama_jurusan') is-invalid @enderror" name="nama_jurusan" 
value="{{ old('nama_jurusan') }}" placeholder="Masukkan nama jurusan">
 
 <!-- error message untuk title -->
 @error('nama_jurusan')
 <div class="alert alert-danger mt-2">
 {{ $message }}
 </div>
 @enderror
 </div>
 <div class="form-group">
 <label class="font-weight-bold">NAMA KAJUR</label>
 <input type="text" class="form-control 
@error('nama_kajur') is-invalid @enderror" name="nama_kajur" value="{{ 
old('nama_kajur') }}" placeholder="Masukkan nama kajur">
 
 <!-- error message untuk title -->
 @error('nama_kajur')
 <div class="alert alert-danger mt-2">
 {{ $message }}
 </div>
 @enderror
 <div class="form-group">
 <label class="font-weight-bold">NAMA SISWA</label>
 <input type="text" class="form-control 
@error('namasiswa') is-invalid @enderror" name="namasiswa" value="{{ 
old('namasiswa') }}" placeholder="Masukkan nama siswa">
 
 <!-- error message untuk title -->
 @error('namasiswa')
 <div class="alert alert-danger mt-2">
 {{ $message }}
 </div>
 @enderror
 </div>
 
 <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
 <button type="reset" class="btn btn-md btn-danger">RESET</button>
 </form> 
 </div>
 </div>
 </div>
 </div>
 </div>
 
@endsection
