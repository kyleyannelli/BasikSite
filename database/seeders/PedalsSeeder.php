<?php

namespace Database\Seeders;

use App\Models\Pedals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pedal = new Pedals();
        $pedal->name = "Distortion";
        $pedal->is_default = true;
        $pedal->save();

        $pedal = new Pedals();
        $pedal->name = "Chorus";
        $pedal->is_default = true;
        $pedal->save();

        $pedal = new Pedals();
        $pedal->name = "Delay";
        $pedal->is_default = true;
        $pedal->save();

        $pedal = new Pedals();
        $pedal->name = "Reverb";
        $pedal->is_default = true;
        $pedal->save();
    }
}
