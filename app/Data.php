<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table='data';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomor', 'judul' ,'isi', 'keterangan',
    ];

    public function setAtribute($atribute)
    {
    	if (isset($atribute['nomor'])) {
    		# code...
    		$this->nomor=$atribute['nomor'];
    	}

    	if (isset($atribute['judul'])) {
    		# code...
    		$this->judul=$atribute['judul'];
    	}


    	if (isset($atribute['isi'])) {
    		# code...
    		$this->isi=$atribute['isi'];
    	}

    	if (isset($atribute['keterangan'])) {
    		# code...
    		$this->keterangan=$atribute['keterangan'];
    	}
    } 

   
}
