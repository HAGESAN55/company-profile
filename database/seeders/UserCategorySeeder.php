<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserCategory::create([
            'category_name' => 'Admin',
            'description' => 'Administrator Sistem',
        ]);

        UserCategory::create([
            'category_name' => 'Customer',
            'description' => 'Pelanggan Layanan.',
        ]);

        UserCategory::create([
            'category_name' => 'Teknisi',
            'description' => 'Teknisi Jaringan',
        ]);
    }
}
