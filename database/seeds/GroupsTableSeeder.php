<?php
/**
 * Created by PhpStorm.
 * User: OluwadamilolaAdebayo
 * Date: 9/15/15
 * Time: 1:14 PM
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Group;
use App\Tutor;


class GroupsTableSeeder extends Seeder
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
        $tutors = Tutor::lists('id')->all();
        for($i=0; $i < 20; $i++){
            $groups = Group::create(
                array(
                    'tutor_id' => $faker->unique()->randomElement($tutors),
                    'name' => $faker->unique()->word,
                    'description' => $faker->paragraph($nbSentences = 5)
                )
            );
        }
    }
}