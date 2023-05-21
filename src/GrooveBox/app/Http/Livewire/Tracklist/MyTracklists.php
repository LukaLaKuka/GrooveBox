<?php

namespace App\Http\Livewire\Tracklist;

use App\Models\Mix\Mix;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class MyTracklists extends Component
{

    protected $tracklists;

    public function mount() {
        $this->getTracklists();
    }

    public function getTracklists() {
        $this->tracklists = auth()->user()->tracklists;
    }

    public function render()
    {
        return view('livewire.tracklist.my-tracklists');
    }
}
