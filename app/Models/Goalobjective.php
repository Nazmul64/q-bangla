<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goalobjective extends Model
{
    use HasFactory;
    protected $fillable = [
        'goal_title',
        'goal_description',
        'goal_photo',


    ];
}
