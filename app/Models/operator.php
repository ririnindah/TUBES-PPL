<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operator extends Model
{
    protected $guarded = ['id'];
    protected $table = 'operator';
    use HasFactory;
}
