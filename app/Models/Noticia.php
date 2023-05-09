<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use softDeletes;
    protected $dates = ['deleted_at'];

    use HasFactory;
}
