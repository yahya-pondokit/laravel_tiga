<a href="{{ route('mahasiswa.index') }}">BALIK</a>
	Nama Depan : {{ $mahasiswa->first_name }}<br>

	Nama Belakang :  {{ $mahasiswa->last_name }}<br>

	Email :  {{ $mahasiswa->email }}<br>

	Password :  MAAP GABISA lIAT PASS<br>

	Jenis Kelamin :  {{ $mahasiswa->jenis_kelamin }} <br>

	Alamat :  {{ $mahasiswa->alamat }} <br>

	Tgl Lahir :  {{ $mahasiswa->tgl_lahir }} <br>

	Agama :  {{ $mahasiswa->agama_id }}<br>