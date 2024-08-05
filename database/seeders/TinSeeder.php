<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<10;$i++){
        DB::table('posts')->insert(
            [
                'title' => fake()->sentence(),
                'content' => fake()->paragraph(),
                'author' => fake()->name(),
                'description'=>fake()->text(50),
                'view'=>rand(10,1000),
                'idCategory' => rand(1, 5)
            ]); 
        }
        
    }
}
