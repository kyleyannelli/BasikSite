<?php

namespace Database\Seeders;

use App\Models\ArtistInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EthanArtistInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artistInformation = new ArtistInformation();
        $artistInformation->first_name = "Jeff";
        $artistInformation->last_name = "Beck";
        $artistInformation->save();

        $artistInformation = new ArtistInformation();
        $artistInformation->first_name = "Steve";
        $artistInformation->last_name = "Vai";
        $artistInformation->save();

        $artistInformation = new ArtistInformation();
        $artistInformation->first_name = "Eric";
        $artistInformation->last_name = "Johnson";
        $artistInformation->save();

        $artistInformation = new ArtistInformation();
        $artistInformation->first_name = "Edward";
        $artistInformation->last_name = "Van Halen";
        $artistInformation->nickname = "Eddie";
        $artistInformation->save();

        $artistInformation = new ArtistInformation();
        $artistInformation->first_name = "Robert";
        $artistInformation->last_name = "Flynn";
        $artistInformation->nickname = "Robb";
        $artistInformation->save();

        $artistInformation = new ArtistInformation();
        $artistInformation->first_name = "Kurt";
        $artistInformation->last_name = "Cobain";
        $artistInformation->save();

        $artistInformation = new ArtistInformation();
        $artistInformation->first_name = "Seamus";
        $artistInformation->last_name = "Coyle";
        $artistInformation->nickname = "Red";
        $artistInformation->save();

        $artistInformation = new ArtistInformation();
        $artistInformation->first_name = "John";
        $artistInformation->last_name = "Mayer";
        $artistInformation->save();
    }
}
