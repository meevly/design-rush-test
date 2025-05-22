<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Web Development',
            'Mobile Development',
            'DevOps & Cloud',
            'UI/UX Design',
            'Database Services',
            'AI & Machine Learning',
            'QA & Testing',
            'Cybersecurity',
            'Blockchain',
            'IoT Solutions',
            'Enterprise Software',
            'Game Development',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }
    }
}