<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name', 
        'event_date', 
        'location', 
        'event_type', 
        'description',
        'ticket_link',
        'event_picture',
        'is_scraped', 
        'scrapper_id'
    ];
}
