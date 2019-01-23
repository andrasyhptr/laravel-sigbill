<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'tb_info';
    
    protected $fillable=[
    	'nama',
    	'jalan',
    	'kordinat_x',
    	'kordinat_y',
        'id_status',    	
        'id_jenis',
        'id_media',
    	'keterangan'
    ];
    
    public $timestamps = false;

    public function kecamatan()
    {   
        return $this->belongsTo('App\Kecamatan', 'id_status');
    } 

    public function jenis()
    {   
        return $this->belongsTo('App\Jenis', 'id_jenis');
    } 

    public function kategori()
    {   
        return $this->belongsTo('App\Kategori', 'id_media');
    } 
}
