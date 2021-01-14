<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use softdeletes;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $fillable = ['nim','nama','alamat','jurusan_id'];

    public $incrementing = false;
    
    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'jurusan_id','id')->withTrashed();
    }
}
