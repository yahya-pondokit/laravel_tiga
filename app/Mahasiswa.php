<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
	use SoftDeletes;

	protected $table = 'kampus';
	protected $fillable = [
    	'first_name', 'last_name', 'email', 'password', 'jenis_kelamin', 'alamat', 'tgl_lahir', 'agama_id'
    ];
    protected $dates = ['deleted_at'];



    // ELOQUENT MUTATOR

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
