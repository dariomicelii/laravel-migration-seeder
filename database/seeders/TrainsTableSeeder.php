<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;


//importiamo i faker

use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();

            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->totale_carrozze = $faker->numberBetween(1, 20);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->orario_di_partenza = $faker->dateTimeBetween(now(), '+2 hours');
            $newTrain->orario_di_arrivo = $faker->dateTimeBetween(now(), '+4 hours');
            $newTrain->codice_treno = $faker->unique()->numberBetween(1000, 9999);


            $newTrain->save();
        }
    }
}
