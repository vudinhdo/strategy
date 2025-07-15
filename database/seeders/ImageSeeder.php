<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ImageSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'name' => 'Ảnh Cổ điển 1',
                'slug' => 'anh-co-dien-1',
                'image' => 'assets/img/portfolio/portfolio-1.webp',
                'description' => 'Ảnh phong cách cổ điển.',
                'tag_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ảnh Hiện đại 1',
                'slug' => 'anh-hien-dai-1',
                'image' => 'assets/img/portfolio/portfolio-10.webp',
                'description' => 'Ảnh phong cách hiện đại.',
                'tag_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ảnh Phong cách 1',
                'slug' => 'anh-phong-cach-1',
                'image' => 'assets/img/portfolio/portfolio-7.webp',
                'description' => 'Ảnh phong cách nghệ thuật.',
                'tag_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ảnh Công nghệ 1',
                'slug' => 'anh-cong-nghe-1',
                'image' => 'assets/img/portfolio/portfolio-4.webp',
                'description' => 'Ảnh chủ đề công nghệ.',
                'tag_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ảnh Công nghệ 2',
                'slug' => 'anh-cong-nghe-2',
                'image' => 'assets/img/anh/sp3.jpg',
                'description' => 'Ảnh chủ đề công nghệ.',
                'tag_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ảnh Công nghệ 3',
                'slug' => 'anh-cong-nghe-3',
                'image' => 'assets/img/anh/sp2.jpg',
                'description' => 'Ảnh chủ đề công nghệ.',
                'tag_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ảnh Công nghệ 4',
                'slug' => 'anh-cong-nghe-4',
                'image' => 'assets/img/anh/sp1.jpg',
                'description' => 'Ảnh chủ đề công nghệ.',
                'tag_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
} 