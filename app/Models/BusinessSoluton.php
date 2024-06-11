<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessSoluton extends Model
{
    use HasFactory;
    protected $fillable = [
        'business_tag',
        'business_title',
        'business_description',
        'profile_photo',
        'business_images',
        'new_business_images',
    ];
}
