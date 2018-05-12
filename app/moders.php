<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moders extends Model
{
    protected $fillable = ['id','name','email','password'];
    public $timestamps = false;
}
