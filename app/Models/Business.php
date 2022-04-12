<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
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
