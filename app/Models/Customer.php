<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'date_of_birth',
        'gender',
        'phone_number',
        'profile_image',
    ];

    /* Relationship */

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function badge() {
        return $this->belongsTo(Badge::class, 'badge_id');
    }
}
