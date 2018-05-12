<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    protected $primaryKey = "Id";
    protected $fillable=['name','artist','category','country','song','image'];

}
