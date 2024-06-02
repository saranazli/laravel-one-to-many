<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Functions\Helper as Help;
use Faker\Generator as Faker;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for( $i=0; $i<20; $i++ ){
            $new_project = new Project();

            $new_project->title = $faker->words(2, true);
            $new_project->slug = Help::generateSlug($new_project->title, new Project());

            $new_project->save();
        }
    }
}
