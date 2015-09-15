<?php
/**
 * Created by PhpStorm.
 * User: OluwadamilolaAdebayo
 * Date: 9/15/15
 * Time: 1:31 PM
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Tutor;


class TutorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $faker = Faker\Factory::create();
        for($i=0; $i < 20; $i++){
            $tutors = Tutor::create(
                array(
                    'name' => $faker->unique()->word,
                    'speciality' => $faker->url,
                    'description' => $faker->paragraph($nbSentences = 5),
                )
            );
        }
    }
}