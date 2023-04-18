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
            if(is_numeric($pedalId)) {
                $this->pedals = PedalInformation::where("pedal_id", "=", $pedalId)->firstOrFail();
            } else {
                $real_pedal_id = \App\Models\Pedals::where("name", "=", $pedalId)->firstOrFail()->id;
                $this->pedals = PedalInformation::where("pedal_id", "=", $real_pedal_id)->firstOrFail();
            }
        } else {
            $this->pedals = PedalInformation::all();
        }
    }
    public function render()
    {
        return view('livewire.pedals');
    }
}
