<a href="{{ route('mahasiswa.index') }}">BALIK</a>
<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
	@method('PUT')
	@csrf
	Nama Depan : <input type="text" name="first_name" value="{{$mahasiswa->first_name}}"> {{$errors->first('first_name')}} <br>

	Nama Belakang : <input type="text" name="last_name" value="{{$mahasiswa->last_name}}"> {{$errors->first('last_name')}} <br>

	Email : <input type="email" name="email" value="{{$mahasiswa->email}}"> {{$errors->first('email')}} <br>

	Password : <input type="password" name="password""> {{$errors->first('password')}} <br>

	Jenis Kelamin : <input type="radio" name="jenis_kelamin" value="L" {{($mahasiswa->jenis_kelamin == 'L') ? 'checked':''}}> Laki - laki <input type="radio" name="jenis_kelamin" value="P" {{($mahasiswa->jenis_kelamin == 'P') ? 'checked':''}}> Perempuan <br>

	Alamat : <textarea name="alamat"> {{$mahasiswa->alamat}} </textarea> {{$errors->first('alamat')}} <br>

	Tgl Lahir : <input type="text" name="tgl_lahir" value="{{$mahasiswa->tgl_lahir}}"> {{$errors->first('tgl_lahir')}} <br>

	Agama : <input type="text" name="agama_id" value="{{$mahasiswa->agama_id}}"> {{$errors->first('agama_id')}}<br>

	<button type="submit">Submit</button>
</form>