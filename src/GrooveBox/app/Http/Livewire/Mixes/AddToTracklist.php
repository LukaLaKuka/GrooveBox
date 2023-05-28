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

    /**
     * Render the component's view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.mixes.add-to-tracklist');
    }

    /*
     * Get the actual mix and all the tracklist of the authenticated user
     */
    public function mount($mixId) {
        $this->mix = \App\Models\Mix\Mix::find($mixId);
        $this->tracklists = auth()->user()->tracklists;
    }

    /**
     * Add the actual mix to the actual tracklist
     * @return void
     */
    public function addMixToTracklist() {
        if (!$this->tracklistId) {
            $this->tracklistId = $this->tracklists->first();
        }

        $tracklist = Tracklist::find($this->tracklistId->id);
        $tracklist->mixes()->attach($this->mix);
        redirect('/tracklist/'.$this->tracklistId->id);
    }
}
