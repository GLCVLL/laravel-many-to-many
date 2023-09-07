<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        $type_ids = Type::pluck('id')->toArray();


        for ($i = 1; $i <= 10; $i++) {
            $project = new Project();
            $project->type_id = Arr::random($type_ids);
            $project->title = $faker->text(30);
            $project->description = $faker->paragraphs(3, true);
            $project->cover_image = $faker->imageUrl();
            $project->start_date = $faker->date;
            $project->end_date = $faker->date;
            $project->category = $faker->word;
            $project->project_url = $faker->url;
            $project->github_url = $faker->url;
            $project->client = $faker->name;
            $project->role = $faker->word;
            $project->additional_notes = $faker->paragraph;
            $project->visibility = $faker->boolean;
            $project->save();
        };
    }
}
