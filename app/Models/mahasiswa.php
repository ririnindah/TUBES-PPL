<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'mahasiswa';

    public function dosenwali(){
        return $this->belongsTo(dosenwali::class);
    }
}
