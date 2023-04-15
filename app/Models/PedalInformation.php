<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PedalInformation extends Model
{
    use HasFactory;

    public function getArtists(): HasManyThrough {
        return $this->hasManyThrough(ArtistInformation::class, "artists_pedals");
    }

    public function getPedal(): HasOne {
        return $this->hasOne(Pedals::class);
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getYearCreated(): int {
        return $this->year_created;
    }

    public function getDescription(): string {
        return $this->description;
    }
}
