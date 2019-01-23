<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'tb_status';
    
    protected $fillable=[
    	'status'
    ];
    
    public $timestamps = false;

    public function info()
	{
		return $this->hasMany('App\Info', 'id_status');
	}
}
