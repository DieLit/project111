<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'img', 'name_apps', 'room', 'price', 'type', 'desc', 'city', 'street', 'garage', 'total_area', 'useble_area', 'balcony', 'terrace', 'bath', 'img1', 'img2','img3', 'fio_broker', 'email_broker', 'phone_broker',
    ];
}
