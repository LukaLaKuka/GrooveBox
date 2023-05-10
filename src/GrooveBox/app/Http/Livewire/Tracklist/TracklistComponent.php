<?php

namespace App\Http\Livewire\Tracklist;

use App\Models\Tracklist\Tracklist;
use Livewire\Component;

class TracklistComponent extends Component
{
    public $tracklist;
    public $mixes;

    public function mount($tracklistId) {
        $this->tracklist = Tracklist::find($tracklistId);
        $this->mixes = $this->tracklist->mixes;
    }

    public function render()
    {
        return view('livewire.tracklist.tracklist');
    }
}
