<?php

namespace App\Model;

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
    		$this->name=$atribute['nomor'];
    	}

    	if (isset($atribute['judul'])) {
    		# code...
    		$this->username=$atribute['judul'];
    	}


    	if (isset($atribute['isi'])) {
    		# code...
    		$this->email=$atribute['isi'];
    	}

    	if (isset($atribute['keterangan'])) {
    		# code...
    		$this->password=$atribute['keterangan'];
    	}
    } 

   
}
