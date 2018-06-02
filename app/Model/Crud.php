<?php

namespace App;

use Illuminate\D\Eloquent\Model;

class Crud extends Model
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

   
}
