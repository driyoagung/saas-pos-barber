<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['name' => 'Haircut', 'type' => 'service']);
        Category::create(['name' => 'Hair Care', 'type' => 'service']);
        Category::create(['name' => 'Shaving', 'type' => 'service']);
        Category::create(['name' => 'Pomade', 'type' => 'product']);
    }
}
