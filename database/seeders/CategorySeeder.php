<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ["name" => "Meat "],
            ["name" => "Fruits"],
            ["name" => "Vegetables"],
            ["name" => "Dairy"],
            ["name" => "Grains, Beans and Nuts"],
            ["name" => "Fish and Seafood"],
        ];
        foreach ($categories as $key => $value) {
            Category::create($value);
        }
    }
}
