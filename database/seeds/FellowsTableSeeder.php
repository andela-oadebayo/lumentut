<?php
/**
 * Created by PhpStorm.
 * User: OluwadamilolaAdebayo
 * Date: 9/15/15
 * Time: 2:14 PM
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Group;
use App\Level;
use App\Fellow;


class FellowsTableSeeder extends Seeder
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
        $group = Group::lists('id')->all();
        $level = Level::lists('id')->all();
        for($i=0; $i < 20; $i++){
            $fellows = Fellow::create(
                array(
                    'level_id' => $faker->unique()->randomElement($level),
                    'group_id' => $faker->unique()->randomElement($group),
                    'name' => $faker->unique()->word
                )
            );
        }
    }
}