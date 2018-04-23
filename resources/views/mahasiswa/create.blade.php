<a href="{{ route('mahasiswa.index') }}">BALIK</a>
<form action="{{ route('mahasiswa.store') }}" method="post">
	@csrf
	Nama Depan : <input type="text" name="first_name" value="{{ old('first_name') }}">{{$errors->first('first_name')}}<br>

	Nama Belakang : <input type="text" name="last_name" value="{{ old('last_name') }}">{{$errors->first('last_name')}}<br>

	Email : <input type="email" name="email" value="{{ old('email') }}">{{$errors->first('email')}}<br>

	Password : <input type="password" name="password">{{$errors->first('password')}}<br>

	Jenis Kelamin : <input type="radio" name="jenis_kelamin" value="L"> Laki - laki | <input type="radio" name="jenis_kelamin" value="P"> Perempuan <br>

	Alamat : <textarea name="alamat">{{ old('alamat') }}</textarea> {{$errors->first('alamat')}} <br>

	Tgl Lahir : <input type="text" name="tgl_lahir" value="{{ old('tgl_lahir') }}"> {{$errors->first('tgl_lahir')}} <br>

	Agama : <input type="text" name="agama_id" value="{{ old('agama_id') }}">{{$errors->first('agama_id')}}<br>

	<button type="submit">Submit</button>
</form>