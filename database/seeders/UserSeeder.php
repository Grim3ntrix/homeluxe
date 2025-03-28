<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Badge, Customer, Status, User, Vendor};
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $offlineStatus  = Status::where(['status' => 'Offline'])->first();
        $badge          = Badge::where(['badge' => 'Classic'])->first();
        $statusVendor   = Status::where(['status' => 'Pending setup'])->first();

        // User and Customer 

        $userCustomer = User::factory()->create([
            'name'      => 'Customer',
            'email'     => 'customer@gmail.com',
            'password'  => Hash::make('homeluxe@customer'),
            'status_id' => $offlineStatus->id,
        ]);

        $userCustomer->assignRole('customer');

        Customer::create([
            'user_id' => $userCustomer->id,
            'badge'   => $badge->id,
        ]);

        // User and Vendor 

        $userVendor = User::factory()->create([
            'name'      => 'Vendor',
            'email'     => 'vendor@gmail.com',
            'password'  => Hash::make('homeluxe@vendor'),
            'status_id' => $offlineStatus->id,
        ]);

        $userVendor->assignRole('vendor');

        Vendor::create([
            'user_id'       => $userVendor->id,
            'badge_id'      => $badge->id,
            'status_id'     => $statusVendor->id,
            'email'         => $userVendor->email,
        ]);

    }
}
