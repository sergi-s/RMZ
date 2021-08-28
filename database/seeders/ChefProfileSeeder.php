<?php

namespace Database\Seeders;

use App\Models\ChefProfile;
use Illuminate\Database\Seeder;

class ChefProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chef_profiles = [
            [
                "id" => 102,
                "user_id" => 102,
                "years_of_xp" => 22,
                "approved" => True,
                "license" => "/uploads/1630160496.pdf"
            ]
        ];

        foreach ($chef_profiles as $key => $value) {
            ChefProfile::create($value);
        }
    }
}
