<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){
            $newProject = new Project();
            $newProject->title = $faker->sentence(2);
            $newProject->description = $faker->sentence(2);
            $newProject->link = $faker->unique()->url();
            $newProject->created = $faker->dateTimeThisYear();
            $newProject->save();
        }
    }
}
