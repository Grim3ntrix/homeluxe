<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::insert([
            [
                'status'     => 'Online',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status'     => 'Offline',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status'     => 'Suspended',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status'     => 'In stock',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status'     => 'Out of stock',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status'     => 'Limited stock',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status'     => 'Sold',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status'     => 'Order placed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status'     => 'Preparing to ship',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status'     => 'In transit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status'     => 'Delivered',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status'     => 'Pending setup',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
