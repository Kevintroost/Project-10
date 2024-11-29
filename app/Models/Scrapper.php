<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scrapper extends Model
{
    use HasFactory;

    protected $fillable = ['source_url', 'last_run_at'];
}
