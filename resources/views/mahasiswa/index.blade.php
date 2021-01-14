@extends('layouts.main')
@section('content')

@if (session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<a class="btn btn-success float-right mx-5 my-2" href="{{ route('mahasiswa.create') }}">Tambah</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th>NO</th>
      <th scope="col">NIM</th>
      <th scope="col">NAMA</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">JURUSAN</th>
      <th>Option</th>
    </tr>
  </thead>
  <tbody>

    @foreach($data as $i =>$d)
      <tr>
        <td>{{ $i+1 }}</td>
        <td>{{ $d->nim }}</td>
        <td>{{ $d->nama }}</td>
        <td>{{ $d->alamat }}</td>
        <td>{{ $d->jurusan->jurusan }}</td>
        <td>
          <a class="btn btn-default" href="{{ route('mahasiswa.show' , $d->nim) }}">Detail</a>
          <a class="btn btn-primary" href="{{ route('mahasiswa.edit' , $d->nim) }}">Ubah</a>
          <a class="btn btn-danger" href="{{ route('mahasiswa.destroy' , $d->nim) }}">Hapus</a>
        </td>
      </tr>
    @endforeach

  </tbody>
</table>
@endsection