<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'date', 'location', 'is_scraped', 'scrapper_id'];

    public function fotoGaleries()
    {
        return $this->hasMany(FotoGalerie::class);
    }
}
