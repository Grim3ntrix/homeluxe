<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_name',
        'location',
        'phone_number',
        'email',
        'business_type',
        'description',
        'reputation',
        'product_total',
    ];

    /* Relationship */

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function status() {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function badge() {
        return $this->belongsTo(Badge::class, 'badge_id');
    }
}
