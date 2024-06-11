<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class totalsolutionheres extends Model
{
    use HasFactory;
    protected $fillable = [
        'solution_title',
        'solution_description',
        'solution_one',
        'solution_two',
        'solution_three',
        'solution_photo',
        'solution_four',
    ];
}
