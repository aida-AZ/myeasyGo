<?php

use Illuminate\Database\Seeder;
use App\Destination;

class destinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data_seeds = [
            ['id'=> '1', 'name' => 'Sabah'],
            ['id'=> '2', 'name' => 'Sarawak'],
            ['id'=> '3', 'name' => 'Langkawi'],
           
        ];

        foreach ($data_seeds as $seed) {
            Destination::firstOrCreate($seed);
        }
    }
}
