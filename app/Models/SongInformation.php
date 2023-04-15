<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class SongInformation extends Model
{
    use HasFactory;

    public function artist(): HasOne {
        return $this->hasOne(ArtistInformation::class, "id",  "artist_information_id");
    }

    public function pedalInformation(): HasOne {
        return $this->hasOne(PedalInformation::class, "pedal_id", "pedal_id");
    }
}
