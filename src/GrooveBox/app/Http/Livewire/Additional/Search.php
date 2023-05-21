<?php

namespace App\Http\Livewire\Additional;

use App\Models\Artist\Artist;
use App\Models\Mix\Mix;
use App\Models\Tracklist\Tracklist;
use Livewire\Component;

class Search extends Component
{

    public $query, $mixes, $tracklists, $artists;

    private $amount = 7;
    public function render()
    {
        $this->updateQueries();
        return view('livewire.additional.search');
    }

    public function updateQueries() {
        $this->mixes = Mix::where('name', 'like', "%".$this->query."%")->where('privacy', 0)->take($this->amount)->get();
        $this->tracklists = Tracklist::where('name', 'like', "%".$this->query."%")->where('privacy', 0)->take($this->amount)->get();
        $this->artists = Artist::where('artist_name', 'like', "%".$this->query."%")->take($this->amount)->get();
    }

    public function like($mixId) {
        $mix = Mix::find($mixId);
        auth()->user()->mixes()->attach($mix->id);
    }

    public function dislike($mixId) {
        $mix = Mix::find($mixId);
        auth()->user()->mixes()->detach($mix->id);
    }
}
