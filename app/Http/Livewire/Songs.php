<?php

namespace App\Http\Livewire;

use App\Models\SongInformation;
use Livewire\Component;

class Songs extends Component
{
    public $songs;
    public function mount($songId = null): void
    {
        if($songId != null) {
            if(is_numeric($songId)) {
                $this->songs = SongInformation::find($songId);
            } else {
                $real_pedal_id = \App\Models\Pedals::where("name", "=", $songId)->firstOrFail()->id;
                $this->songs = SongInformation::where("pedal_id", "=", $real_pedal_id)->firstOrFail();
            }
        } else {
            $this->songs = SongInformation::all();
        }
    }
    public function render()
    {
        return view('livewire.songs');
    }
}
