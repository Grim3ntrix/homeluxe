<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use HasFactory;

    protected $fillable = [
        'badge',
    ];

    /* Relationship */

    public function customer() {
        return $this->hasMany(Customer::class, 'badge_id');
    }
}
