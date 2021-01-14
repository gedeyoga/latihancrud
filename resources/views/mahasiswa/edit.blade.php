@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto mt-5">
            <div class="card">
                <div class="card-body">
                    <h2>Edit Mahasiswa</h2>
                    <form action="{{ route('mahasiswa.update' , $data->nim) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="number" name="nim" class="form-control" placeholder="19101290" value="{{ $data->nim }}" disabled>
                            @error('nim')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Joseph Antonio" value="{{ $data->nama }}">
                            @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jurusan_id">Nama</label>
                            <select name="jurusan_id" class="form-control">
                                <option value=""> -- PILIH JURUSAN -- </option>
                                @foreach($jurusan as $j)
                                    <option value="{{ $j->id }}"
                                        {{ ( $data->jurusan->id == $j->id) ? 'selected' : '' }}
                                    >{{ $j->jurusan }}</option>
                                @endforeach
                            </select>
                            @error('jurusan_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea style="resize: none;" name="alamat" class="form-control" placeholder="Jln Gatot Subroto"rows="5">{{ $data->alamat }}</textarea>
                            @error('alamat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Perbaharui</button>
                        <a class="btn btn-default" href="{{ route('mahasiswa.index') }}">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection