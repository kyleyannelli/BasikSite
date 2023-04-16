<?php

namespace App\Http\Livewire;

use App\Models\PedalInformation;
use Livewire\Component;

class Pedals extends Component
{
    public $pedals;
    public function mount($pedalId = null): void
    {
        if($pedalId != null) {
            $this->pedals = PedalInformation::where("pedal_id", "=", $pedalId)->firstOrFail();
        } else {
            $this->pedals = PedalInformation::all();
        }
    }
    public function render()
    {
        return view('livewire.pedals');
    }
}
