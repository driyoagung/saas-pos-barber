<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Category;

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        $catHaircut = Category::where('name', 'Haircut')->first();
        $catHairCare = Category::where('name', 'Hair Care')->first();
        $catShave = Category::where('name', 'Shaving')->first();
        $catPomade = Category::where('name', 'Pomade')->first();

        Item::create([
            'category_id' => $catHaircut->id,
            'name' => 'Premium Haircut',
            'description' => 'Detailed haircut with styling.',
            'price' => 45.00,
            'type' => 'service',
            'duration' => 45
        ]);
        Item::create([
            'category_id' => $catHaircut->id,
            'name' => 'Basic Haircut',
            'price' => 25.00,
            'type' => 'service',
            'duration' => 30
        ]);
        Item::create([
            'category_id' => $catShave->id,
            'name' => 'Hot Towel Shave',
            'price' => 20.00,
            'type' => 'service',
            'duration' => 20
        ]);
        Item::create([
            'category_id' => $catHairCare->id,
            'name' => 'Creambath / Hair Spa',
            'price' => 35.00,
            'type' => 'service',
            'duration' => 60
        ]);
        Item::create([
            'category_id' => $catPomade->id,
            'name' => 'Pomade Suavecito',
            'price' => 18.50,
            'type' => 'product',
            'stock' => 50
        ]);
    }
}
