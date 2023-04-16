<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PedalInformation extends Model
{
    use HasFactory;

    public function artists(): HasManyThrough {
        return $this->hasManyThrough(ArtistInformation::class, ArtistsPedals::class, "pedal_id", "id", "pedal_id");
    }

    public function pedal(): HasOne {
        return $this->hasOne(Pedals::class, "id", "pedal_id");
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
