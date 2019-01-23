<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'tb_jenis';
    
    protected $fillable=[
    	'tipe',
    	'created_at',
    	'updated_at'
    ];
    
    public $timestamps = false;

    public function info()
	{
		return $this->hasMany('App\Info', 'id');
	}
}
