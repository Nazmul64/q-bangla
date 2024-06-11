<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourservices extends Model
{
    use HasFactory;
    protected $fillable = [
        'ourservice_tag',
        'ourservies_shortsdescription',
        'main_title',
        'main_description',
        'main_logo',
    ];
}
