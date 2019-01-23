<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'tb_media';
    
    protected $fillable=[
    	'media'
    ];
    
    public $timestamps = false;

    public function info()
	{
		return $this->hasOne('App\Info', 'id_media');
	}
}
