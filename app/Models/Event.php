<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event-name', 
        'event-date', 
        'location', 
        'event-type', 
        'description',
        'ticket-link',
        'event-picture',
        'is_scraped', 
        'scrapper_id'
    ];
}
