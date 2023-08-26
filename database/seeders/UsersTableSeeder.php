<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create(
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@m.icoa.it',
                'password' => Hash::make('1234'),
                'type' => 'super admin',
                'lang' => 'en',
                'avatar' => '',
                'created_by' => 0,
                'email_verified_at' => now(),
            ]
        );
        $company = User::create(
            [
                'name' => 'company',
                'email' => 'company@m.icoa.it',
                'password' => Hash::make('1234'),
                'type' => 'company',
                'default_pipeline' => 1,
                'plan' => 1,
                'lang' => 'en',
                'avatar' => '',
                'created_by' => 1,
                'email_verified_at' => now(),
            ]
        );
    }
}
