<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\User;
use App\Models\UserCategories;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ایجاد 5 دسته‌بندی
        Category::factory(5)->create();

        // ایجاد 10 کاربر
        \App\Models\User::factory(10)->create()->each(function ($user) {
            // انتخاب تصادفی 1 یا 2 دسته‌بندی برای هر کاربر و ایجاد رابطه در جدول UserCategories
            $categories = Category::inRandomOrder()->take(rand(1, 2))->pluck('id');
            $user->categories()->attach($categories);
        });

        // ایجاد کاربر تست
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
