<?php

namespace App\Http\Livewire\Tracklist;

use App\Models\Mix\Mix;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class MyTracklists extends Component
{

    protected $tracklists;

    /**
     * Get all the tracklist of the authenticated user
     * @return void
     */
    public function mount() {
        $this->getTracklists();
    }

    /**
     * Get all the tracklist of the authenticated user
     * @return void
     */
    public function getTracklists() {
        $this->tracklists = auth()->user()->tracklists;
    }

    /**
     * Render the component's view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.tracklist.my-tracklists');
    }
}
