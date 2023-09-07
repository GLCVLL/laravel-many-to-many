<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            ['name' => 'React'],
            ['name' => 'Angular'],
            ['name' => 'Vue.js'],
            ['name' => 'Node.js'],
            ['name' => 'Laravel'],
            ['name' => 'Ruby on Rails'],
            ['name' => 'ASP.NET'],
            ['name' => 'Express.js'],
            ['name' => 'Django'],
            ['name' => 'Flask'],
            ['name' => 'Spring Boot'],
            ['name' => 'Swift'],
            ['name' => 'Kotlin'],
            ['name' => 'C#'],
            ['name' => 'Java'],
        ];

        foreach ($technologies as $technology) {
            $new_technology = new Technology();
            $new_technology->name = $technology['name'];
            $new_technology->save();
        }
    }
}
