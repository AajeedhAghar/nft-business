<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;


    protected $guarded = [];
    public function User()
    {
        return $this->belongsTo('App\User');
    }


   
    public function Format()
    {
        return $this->hasMany('App\Format');
    }
}
