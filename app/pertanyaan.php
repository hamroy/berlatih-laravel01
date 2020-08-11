<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    //
    protected $table = 'pertanyaan'; //default pertanyaans
    // protected $primaryKey = 'id'; //default id

    //save metode assigment
    protected $fillable = ["judul","isi","profil_id"];    
    // protected $guarded = []; //many col
}

