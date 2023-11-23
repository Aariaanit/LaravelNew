<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;
use Faker\Factory as Faker;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::create([
            'title' => 'Laravel eshte 1-shi',
            'completed' => 1

        ]);

        $faker = Faker::create();

        foreach(range(0,30) as $i) {
            Todo::create([
                'title' => $faker->sentence(3),
                'completed' => 0
    
            ]);
        }    
    }
}
