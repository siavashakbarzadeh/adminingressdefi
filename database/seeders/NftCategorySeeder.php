<?php

namespace Database\Seeders;

use App\Models\NftCategory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NftCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = NftCategory::create(
            [
                'name' => 'pictures',
                'description' => 'moooo',

            ]
        );
        $category = NftCategory::create(
            [
                'name' => 'music',
                'description' => 'dgdfgdf',

            ]
        );
    }
}
