<?php

namespace App;

use App\login;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['imgPath', 'title', 'description'];
}
