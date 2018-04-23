<a href="{{route('mahasiswa.create')}}">Create Santri</a>
<br>
@if(Session::has('mahasiswa'))
{{Session::get('mahasiswa')}}
@endif

@php
$no = 0;
@endphp
<br>
@foreach($mahasiswa as $row)
	
	No : {{++$no}} 
	Nama : {{$row->full_name}} 
	Email : {{$row->email}} 
	Jenis Kelamin : {{$row->gender}}
	Tanggal Lahir : {{date('d-F-Y', strtotime($row->tgl_lahir))}}
	Agama Id : {{$row->agama_id}} 
	<a href="{{ route('mahasiswa.edit', $row->id) }}">Edit</a>
	<a href="{{ route('mahasiswa.show', $row->id)}} ">Detail</a> 
	<form action="{{ route('mahasiswa.destroy', $row->id)}}" method="POST"> 
		@method('DELETE')
		@csrf
		<button type="submit">Delete</button>
	</form>
<br>
@endforeach