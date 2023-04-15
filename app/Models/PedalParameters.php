<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedalParameters extends Model
{
    use HasFactory;

    public function getName(): string {
        return $this->name;
    }

    public function getValue(): float {
        return floatval($this->float_value_as_string);
    }

    public function getMinValue(): int {
        return $this->min_value;
    }

    public function getMaxValue(): int {
        return $this->max_value;
    }
}
