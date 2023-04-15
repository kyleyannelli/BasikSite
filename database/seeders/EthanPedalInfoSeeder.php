<?php

namespace Database\Seeders;

use App\Models\PedalInformation;
use App\Models\Pedals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EthanPedalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pedalInformation = new PedalInformation();
        $pedalInformation->pedal_id = Pedals::where("name", "=", "Distortion")->firstOrFail()->id;
        $pedalInformation->description = "Distortion is when the signal of any electronic device (in this case a guitar) is overloaded and loses clarity in notes, while having high amounts of gain.";
        $pedalInformation->color = "Orange";
        $pedalInformation->year_created = "1978";
        $pedalInformation->save();

        $pedalInformation = new PedalInformation();
        $pedalInformation->pedal_id = Pedals::where("name", "=", "Reverb")->firstOrFail()->id;
        $pedalInformation->description = "Reverb is a roomy feel to a guitar tone, giving it life and adding fullness. Many artists have used this in clean tones to fill in the gaps and have it sound like it is in a large empty room.";
        $pedalInformation->color = "Grey";
        $pedalInformation->year_created = "1987";
        $pedalInformation->save();

        $pedalInformation = new PedalInformation();
        $pedalInformation->pedal_id = Pedals::where("name", "=", "Delay")->firstOrFail()->id;
        $pedalInformation->description = "Delay is fairly self-explanatory. Delay is a repeat of a signal, delaying the signal, giving it an echo effect. Boss was the first to create this with the DD-2 (Digital Delay 2).";
        $pedalInformation->color = "White";
        $pedalInformation->year_created = "1983";
        $pedalInformation->save();

        $pedalInformation = new PedalInformation();
        $pedalInformation->pedal_id = Pedals::where("name", "=", "Chorus")->firstOrFail()->id;
        $pedalInformation->description = "Chorus is the variation of timing, slight pitch changes that give it a revolving-like sound, and add thickness to the harmonics. It makes a single instrument sound like many at once, like a layering effect.";
        $pedalInformation->color = "Light Blue";
        $pedalInformation->year_created = "1976";
        $pedalInformation->save();
    }
}
