<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_photo',
        'number',
        'country',
        'user_name',
        'sponsor_id',
        'placement_id',
        'position_set',
        // 'referral_code',
        // 'referral_id',
        // 'right_referral_code',
        // 'left_referral_code',
        // 'own_id',
        'total_deposite',
        'direct_group',
        'total_group',
        'is_active',
        'active_date',
        'total_income',
        'total_widthrawl',
        'current_withdrawl_request',
        'total_group_active',
        'total_group_deposite',
        'status',
        'created_by'


    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
