<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pedals extends Model
{
    use HasFactory;

    public function getPosition(): int {
        return $this->position_in_board;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getParameters(): HasMany {
        return $this->hasMany(PedalParameters::class);
    }
}
