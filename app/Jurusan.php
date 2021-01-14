<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jurusan extends Model
{
    use softdeletes;

    protected $table = 'jurusan';
    protected $fillable = ['jurusan'];
    
}