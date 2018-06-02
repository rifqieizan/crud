<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $table='crud';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username' ,'email', 'password',
    ];
     public function setAtribute($atribute)
    {
    	if (isset($atribute['name'])) {
    		# code...
    		$this->name=$atribute['name'];
    	}

    	if (isset($atribute['username'])) {
    		# code...
    		$this->username=$atribute['username'];
    	}


    	if (isset($atribute['email'])) {
    		# code...
    		$this->email=$atribute['email'];
    	}

    	if (isset($atribute['password'])) {
    		# code...
    		$this->password=$atribute['password'];
    	}
    } 

   
}
