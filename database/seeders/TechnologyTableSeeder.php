<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helper;
use Faker\Generator as Faker;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for( $i=0; $i<20; $i++ ){
            $new_technology = new Technology();

            $new_technology->title = $faker->words(2, true);
            $new_technology->slug = Help::generateSlug($new_technology->title, new Technology());
            $new_technology->description = $faker->sentence();
            $new_technology->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/800px-Laravel.svg.png';

            $new_technology->save();
        }
    }
}
