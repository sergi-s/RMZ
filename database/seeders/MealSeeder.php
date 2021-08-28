<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meal;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'chef_id' => 102,
                'category_id' => 2,
                'name' => "Fatteh",
                'description' => 'Fatteh is an Egyptian and Levantine dish consisting of pieces of fresh, toasted, grilled, or stale flatbread covered with other ingredients that vary according to region. It is also some times ',
                'price' => 100
            ],
            [
                'chef_id' => 102,
                'category_id' => 2,
                'name' => "Steak",
                'description' => 'A steak is a meat generally sliced across the muscle fibers, potentially including a bone. It is normally grilled, though can also be pan-fried. Steak can also be cooked in sauce, such as in',
                'price' => 200
            ],
            [
                'chef_id' => 102,
                'category_id' => 2,
                'name' => "shawarma",
                'description' => 'Shawarma is a Levantine Arab dish consisting of meat cut into thin slices, stacked in a cone-like shape, and roasted on a slowly-turning vertical rotisserie or spit. Originally made with lamb, mutton or ',
                'price' => 500
            ],

        ];


        foreach ($products as $key => $value) {
            Meal::create($value);
        }
    }
}
