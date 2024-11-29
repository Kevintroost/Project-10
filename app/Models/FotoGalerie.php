<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoGalerie extends Model
{
    use HasFactory;

    protected $fillable = ['foto', 'admin_id'];
}
