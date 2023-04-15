<?php

namespace Database\Seeders;

use App\Models\ArtistInformation;
use App\Models\Pedals;
use App\Models\SongInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EthanSongInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $songInformation = new SongInformation();
        $songInformation->artist_information_id = ArtistInformation::where("first_name", "=", "Kurt")
            ->where("last_name", "=", "Cobain")->firstOrFail()->id;
        $songInformation->name = "Come As You Are";
        $songInformation->pedal_id = Pedals::where("name", "=", "Chorus")->firstOrFail()->id;
        $songInformation->released = "1992-03-03";
        $songInformation->save();

        $songInformation = new SongInformation();
        $songInformation->artist_information_id = ArtistInformation::where("first_name", "=", "Seamus")
            ->where("last_name", "=", "Coyle")->firstOrFail()->id;
        $songInformation->name = "Australia Street";
        $songInformation->pedal_id = Pedals::where("name", "=", "Distortion")->firstOrFail()->id;
        $songInformation->released = "2013-03-08";
        $songInformation->save();

        $songInformation = new SongInformation();
        $songInformation->artist_information_id = ArtistInformation::where("first_name", "=", "John")
            ->where("last_name", "=", "Mayer")->firstOrFail()->id;
        $songInformation->name = "Slow Dancing in a Burning Room";
        $songInformation->pedal_id = Pedals::where("name", "=", "Reverb")->firstOrFail()->id;
        $songInformation->released = "2006-09-12";
        $songInformation->save();

        $songInformation = new SongInformation();
        $songInformation->artist_information_id = ArtistInformation::where("first_name", "=", "Robert")
            ->where("last_name", "=", "Flynn")->firstOrFail()->id;
        $songInformation->name = "A Nation on Fire";
        $songInformation->pedal_id = Pedals::where("name", "=", "Delay")->firstOrFail()->id;
        $songInformation->released = "1994-08-09";
        $songInformation->save();
    }
}
