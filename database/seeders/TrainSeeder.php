<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $actualTrain = new Train();
            $actualTrain->company = 'Trenitalia';
            $actualTrain->departure_station = 'Milano Centrale';
            $actualTrain->arrival_station = 'Padova Centrale';
            $actualTrain->departure_time = '11:00';
            $actualTrain->arrival_time = '14:00';
            $actualTrain->train_code = '86012';
            $actualTrain->number_of_wagon = '13';
            $actualTrain->on_schedule = 'Si';
            $actualTrain->cancelled = 'No';
            $actualTrain->save();

    }
}
