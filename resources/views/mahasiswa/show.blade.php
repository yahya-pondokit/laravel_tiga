@extends('layout.app')
@section('tab-title', 'Mahasiswa | Data')
@section('title', 'Detail Data Mahasiswa Abadi')
@section('content')
<div class="box-body">
	<a href="{{route('mahasiswa.index')}}" class="btn btn-info">Go Back</a>
</div>
<div class="box-body no-padding">
  <table class="table table-striped table-bordered">
    <thead>
        <tr>
          <th>Nama Depan</th>
          <th>Nama Belakang</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Alamat</th>
          <th>Tanggal Lahir</th>
          <th>Id</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <td>{{$mahasiswa->first_name}}</td>
          <td>{{$mahasiswa->last_name}}</td>
          <td>{{$mahasiswa->email}}</td>
          <td>{{$mahasiswa->gender}}</td>
          <td>{{$mahasiswa->alamat}}</td>
          <td>{{date('d F Y', strtotime($mahasiswa->tgl_lahir))}}</td>
          <td>{{$mahasiswa->agama_id}}</td>
		</td>
        </tr>
    </tbody>
  </table>
</div>
@endsection
<!-- 
<a href="{{ route('mahasiswa.index') }}">BALIK</a>
	Nama Depan : {{ $mahasiswa->first_name }}<br>

	Nama Belakang :  {{ $mahasiswa->last_name }}<br>

	Email :  {{ $mahasiswa->email }}<br>

	Password :  MAAP GABISA lIAT PASS<br>

	Jenis Kelamin :  {{ $mahasiswa->jenis_kelamin }} <br>

	Alamat :  {{ $mahasiswa->alamat }} <br>

	Tgl Lahir :  {{ $mahasiswa->tgl_lahir }} <br>

	Agama :  {{ $mahasiswa->agama_id }}<br> -->