<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    protected $fillable = ['name','adresse','lng','lat'];
}