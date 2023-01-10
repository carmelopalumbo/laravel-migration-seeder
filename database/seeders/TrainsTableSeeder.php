<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Factory;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 20; $i++) {
            $new_train = new Train();
            $new_train->agency = $faker->randomElement(['Italo', 'Trenitalia']);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->bothify('######');
            $new_train->carriages = $faker->numberBetween(5, 15);
            $new_train->on_time = $faker->boolean();
            $new_train->on_time = $faker->boolean();
            $new_train->is_delete = $faker->boolean();
            //dump($new_train);
            $new_train->save();
        }

        // $table->string('agency', 40);
        // $table->string('departure_station', 40);
        // $table->string('arrival_station', 40);
        // $table->time('departure_time');
        // $table->time('arrival_time');
        // $table->string('train_code', 6);
        // $table->smallInteger('carriages')->nullable();
        // $table->tinyInteger('on_time')->default(1);
        // $table->tinyInteger('is_delete')->default(0);
    }
}
