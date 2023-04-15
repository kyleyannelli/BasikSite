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
            $this->songs = SongInformation::find($songId);
        } else {
            $this->songs = SongInformation::all();
        }
    }
    public function render()
    {
        return view('livewire.songs');
    }
}
