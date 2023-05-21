<?php

namespace App\Http\Livewire\Mixes;

use App\Models\Tracklist\Tracklist;
use Livewire\Component;

class AddToTracklist extends Component
{
    public $mix, $tracklists, $tracklistId;

    protected $rules = [
        'tracklistId' => 'required|number',
    ];

    public function render()
    {
        return view('livewire.mixes.add-to-tracklist');
    }

    public function mount($mixId) {
        $this->mix = \App\Models\Mix\Mix::find($mixId);
        $this->tracklists = auth()->user()->tracklists;
    }

    public function addMixToTracklist() {
        if (!$this->tracklistId) {
            $this->tracklistId = $this->tracklists->first();
        }

        $tracklist = Tracklist::find($this->tracklistId->id);
        $tracklist->mixes()->attach($this->mix);
        redirect('/tracklist/'.$this->tracklistId->id);
    }
}
