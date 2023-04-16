<?php

namespace Database\Seeders;

use App\Models\ArtistInformation;
use App\Models\ArtistsPedals;
use App\Models\Pedals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EthanArtistsPedalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artistPedal = new ArtistsPedals();
        $artistPedal->artist_information_id = ArtistInformation::where("first_name", "=", "Jeff")
            ->where("last_name", "=", "Beck")->firstOrFail()->id;
        $artistPedal->pedal_id = Pedals::where("name", "=", "Distortion")->firstOrFail()->id;
        $artistPedal->save();

        $artistPedal = new ArtistsPedals();
        $artistPedal->artist_information_id = ArtistInformation::where("first_name", "=", "Steve")
            ->where("last_name", "=", "Vai")->firstOrFail()->id;
        $artistPedal->pedal_id = Pedals::where("name", "=", "Delay")->firstOrFail()->id;
        $artistPedal->save();

        $artistPedal = new ArtistsPedals();
        $artistPedal->artist_information_id = ArtistInformation::where("first_name", "=", "Eric")
            ->where("last_name", "=", "Johnson")->firstOrFail()->id;
        $artistPedal->pedal_id = Pedals::where("name", "=", "Reverb")->firstOrFail()->id;
        $artistPedal->save();

        $artistPedal = new ArtistsPedals();
        $artistPedal->artist_information_id = ArtistInformation::where("first_name", "=", "Edward")
            ->where("last_name", "=", "Van Halen")->firstOrFail()->id;
        $artistPedal->pedal_id = Pedals::where("name", "=", "Chorus")->firstOrFail()->id;
        $artistPedal->save();

        $artistPedal = new ArtistsPedals();
        $artistPedal->artist_information_id = ArtistInformation::where("first_name", "=", "Robert")
            ->where("last_name", "=", "Flynn")->firstOrFail()->id;
        $artistPedal->pedal_id = Pedals::where("name", "=", "Chorus")->firstOrFail()->id;
        $artistPedal->save();

        $artistPedal = new ArtistsPedals();
        $artistPedal->artist_information_id = ArtistInformation::where("first_name", "=", "Kurt")
            ->where("last_name", "=", "Cobain")->firstOrFail()->id;
        $artistPedal->pedal_id = Pedals::where("name", "=", "Chorus")->firstOrFail()->id;
        $artistPedal->save();

        $artistPedal = new ArtistsPedals();
        $artistPedal->artist_information_id = ArtistInformation::where("first_name", "=", "Seamus")
            ->where("last_name", "=", "Coyle")->firstOrFail()->id;
        $artistPedal->pedal_id = Pedals::where("name", "=", "Distortion")->firstOrFail()->id;
        $artistPedal->save();

        $artistPedal = new ArtistsPedals();
        $artistPedal->artist_information_id = ArtistInformation::where("first_name", "=", "John")
            ->where("last_name", "=", "Mayer")->firstOrFail()->id;
        $artistPedal->pedal_id = Pedals::where("name", "=", "Reverb")->firstOrFail()->id;
        $artistPedal->save();
    }
}
