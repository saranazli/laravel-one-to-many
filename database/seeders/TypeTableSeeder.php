<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helper as Help;
use Faker\Generator as Faker;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for( $i=0; $i<20; $i++ ){
            $new_type = new Type();

            $new_type->title = $faker->words(1, true);
            $new_type->slug = Help::generateSlug($new_type->title, new Type());
            $new_type->description = $faker->sentence();

            $new_type->save();
        }
    }
}
