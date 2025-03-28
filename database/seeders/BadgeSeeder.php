<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Badge;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Badge::insert([
            [
                'badge'      => 'Classic',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'badge'      => 'Bronze',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'badge'      => 'Silver',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'badge'      => 'Gold',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'badge'      => 'Preffered',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
