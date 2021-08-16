@extends('template')
@section('content')
<div class="btn-group float-right m-2" role="group" aria-label="Basic example">
      <a href="/kompetensi" class="btn btn-success ">Kompetensi Siswa</a>
      <a href="/" class="btn btn-warning">Semua Kelas</a>
  @foreach ($kelas as $k)
      <a href="/{{$k}}" class="btn btn-primary">Kelas {{$k}}</a>
  @endforeach
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Semester</th>
      <th scope="col">Nama Pelajaran</th>
      <th scope="col">Tipe Nilai</th>
      <th scope="col">Nilai</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($siswa as $s)
      <tr>
        <th scope="row">{{$s->nik}}</th>
        <td>{{$s->nama}}</td>
        <td>{{$s->kelas}}</td>
        <td>{{$s->semester}}</td>
        <td>{{$s->pelajaran}}</td>
        <td>{{$s->type_nilai}}</td>
        <td>{{$s->nilai}}</td>
      </tr>
    @endforeach
    
  </tbody>
  
</table>
    
<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
    <a class="btn btn-secondary" href="{{$siswa->previousPageUrl()}}">Back</a>
    <a class="btn btn-secondary" href="{{$siswa->nextPageUrl()}}">Next</a>
  </div>

</div>
@endsection