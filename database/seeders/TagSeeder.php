<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TagSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tags')->insert([
            ['name' => 'Cổ điển', 'slug' => 'co-dien', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hiện đại', 'slug' => 'hien-dai', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Phong cách', 'slug' => 'phong-cach', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Công nghệ', 'slug' => 'cong-nghe', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
} 