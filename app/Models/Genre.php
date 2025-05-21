<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres'; // tabel genres di database


    protected $fillable = ['name', 'description'];
}
