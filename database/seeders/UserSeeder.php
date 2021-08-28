<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => "101",
                'name' => "Sergi",
                'email' => "sergisamirboules@gmail.com",
                'isAdmin' => True,
                'password' => "$2y$10\$MggCsS9mUYXxUVyJxQUco.CzW0hCJvO01FPqzq20A9tccVhldbou2",
            ],
            [
                'id' => "102",
                'name' => "Karim",
                'email' => "karim@gmail.com",
                'isChef' => True,
                'password' => "$2y$10\$VA2RdDjb9NN9UTT.zvfcq.UNa4YmXtD8/XQeVgUH4/xlbYZq/ATmS",
            ],
            [
                'id' => "103",
                'name' => "Reda",
                'email' => "reda@gmail.com",
                'isVIP' => True,
                'password' => "$2y$10\$VA2RdDjb9NN9UTT.zvfcq.UNa4YmXtD8/XQeVgUH4/xlbYZq/ATmS",
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
