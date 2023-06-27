@extends('template')
@section('judul_halaman','')
@section('konten')
    <div class="container mt-5 mb-5">
        <div class="row">
             <div class="col-md-12">
                 <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('jurusan.update', $jurusan->id) }}" 
                        method="POST" enctype="multipart/form-data"> 
                        @csrf 
                        @method('PUT') 
                        <div class="form-group">
                        <label class="font-weight-bold">NAMA MATA JURUSAN</label>
                        <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror" name="nama_jurusan" value="{{ old('nama_jurusan', $jurusan->nama_jurusan) }}" placeholder="Masukkan Nama">
                        @error('nama_jurusan')
                        <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label class="font-weight-bold">NAMA KAJUR</label>
                        <input type="text" class="form-control @error('namakajur') is-invalid @enderror" name="namakajur" value="{{ old('namakajur', $jurusan->namakajur ) }}" placeholder="Masukkan nama kajur">
                         @error('nama_kajur')
                         <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        @enderror
                        </div> 
                        <div class="form-group">
                        <label class="font-weight-bold">NAMA SISWA</label>
                        <input type="text" class="form-control @error('namasiswa') is-invalid @enderror" name="namasiswa" value="{{ old('namasiswa', $jurusan->namasiswa ) }}" placeholder="Masukkan nama kajur">
                         @error('namasiswa')
                         <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
 </div>
 
@endsection
 