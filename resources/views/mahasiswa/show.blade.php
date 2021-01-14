@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto mt-5">
            <div class="card">
                <div class="card-body">
                    <h2>Detail Mahasiswa</h2>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" name="nim" class="form-control" value="{{ $data->nim }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="jurusan_id">Jurusan</label>
                        <input type="text" name="jurusan_id" class="form-control" value="{{ $data->jurusan->jurusan }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nim">Alamat</label>
                        <textarea style="resize: none;" name="alamat" class="form-control" rows="5" disabled>{{ $data->alamat }}</textarea>
                    </div>
                    <a class="btn btn-default" href="{{ route('mahasiswa.index') }}">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection