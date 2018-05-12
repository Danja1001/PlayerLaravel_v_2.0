<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $primaryKey = "Id";
    protected $fillable=['Country','Class','Continent'];
    public $timestamps = false;

}
