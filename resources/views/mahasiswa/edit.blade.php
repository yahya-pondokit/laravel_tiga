@extends('layout.app')
@section('tab-title', 'Mahasiswa | Edit')
@section('title', 'Update Data Mahasiswa Abadi')
@section('content')
<form class="form-horizontal" action="{{route('mahasiswa.update', $mahasiswa->id)}}" method="post">
	@method('PUT')
	@csrf
	<div class="box-body">
        <div class="form-group">
          <label for="fname" class="col-sm-2 control-label">Nama Depan</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" name="first_name" id="fname" placeholder="Nama kamu" value="{{$mahasiswa->first_name}}">{{$errors->first('first_name')}}
          </div>
        </div>
        <div class="form-group">
          <label for="lname" class="col-sm-2 control-label">Nama Belakang</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" name="last_name" id="lname" placeholder="Nama kamu lagi <3" value="{{$mahasiswa->last_name}}">{{$errors->first('last_name')}}
          </div>
        </div>
        <div class="form-group">
          <label for="mail" class="col-sm-2 control-label">Email</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" name="email" id="mail" placeholder="Email" value="{{$mahasiswa->email}}">{{$errors->first('email')}}
          </div>
        </div>
        <div class="form-group">
          <label for="pass" class="col-sm-2 control-label">Password</label>

          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="pass" placeholder="Password">{{$errors->first('password')}}
          </div>
        </div>
        <div class="form-group">
          <label for="pass" class="col-sm-2 control-label">Jenis Kelamin</label>
          <div class="col-sm-10 radio">
            <label>
              <input type="radio" name="jenis_kelamin" value="L" {{($mahasiswa->jenis_kelamin == 'L') ? 'checked':''}}>
              Laki - laki
            </label><br>
            <label>
              <input type="radio" name="jenis_kelamin" value="P" {{($mahasiswa->jenis_kelamin == 'L') ? 'checked':''}}>
              Perempuan
            </label><br>
            <label>
              <input type="radio" name="jenis_kelamin" disabled>
              Lainnya
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="alamat" class="col-sm-2 control-label">Alamat</label>

          <div class="col-sm-10">
            <textarea class="form-control" id="alamat" placeholder="Alamat utk di stalk">{{$mahasiswa->alamat}}</textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="tgllhr" class="col-sm-2 control-label">Tanggal Lahir</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" name="tgl_lahir" id="tgllhr" placeholder="format: yyyy-mm-dd" value="{{$mahasiswa->tgl_lahir}}">{{$errors->first('tgl_lahir')}}
          </div>
        </div>
        <div class="form-group">
          <label for="agama" class="col-sm-2 control-label">Agama Id</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" name="agama_id" id="agama" placeholder="angka saja" value="{{$mahasiswa->agama_id}}">{{$errors->first('agama_id')}}
          </div>
        </div>
      </div>
          <div class="box-footer">
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-info pull-right">Update</button>
          </div>
@endsection
<!-- <a href="{{ route('mahasiswa.index') }}">BALIK</a>
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
</form> -->