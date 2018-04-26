@extends('layout.app')
@section('tab-title', 'Mahasiswa | Index')
@section('title', 'Daftar Mahasiswa Abadi')
@section('content')
<div class="box-body">
	<div class="col-sm-10">
		@if(Session::has('mahasiswa'))
		{{Session::get('mahasiswa')}}
		@endif
	</div>
	<a href="{{route('mahasiswa.create')}}" class="btn btn-info pull-right">Create Santri</a>
</div>
@php
$no = 0;
@endphp
<div class="box-body no-padding">
  <table class="table table-striped table-bordered">
    <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Tanggal Lahir</th>
          <th>Id</th>
          <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswa as $row)
        <tr>
          <td>{{++$no}}</td>
          <td>{{$row->full_name}}</td>
          <td>{{$row->email}}</td>
          <td>{{$row->gender}}</td>
          <td>{{date('d F Y', strtotime($row->tgl_lahir))}}</td>
          <td>{{$row->agama_id}}</td>
          <td><a href="{{ route('mahasiswa.edit', $row->id)}}" class="btn btn-default">Edit</a></td>
          <td><a href="{{ route('mahasiswa.show', $row->id)}}" class="btn btn-info">Detail</a></td>
          <td>
          	<form action="{{ route('mahasiswa.destroy', $row->id)}}" method="POST">
              	@method('DELETE')
				@csrf
				<button class="btn btn-danger" type="submit">Delete</button>
			</form>
		</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection