<?php

namespace App\Http\Livewire\Tracklist;

use App\Models\Mix\Mix;
use App\Models\Tracklist\Tracklist;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class TracklistComponent extends Component
{
    public $tracklist;
    public $mixes;

    public function mount($tracklistId) {
        $this->tracklist = Tracklist::find($tracklistId);
    }

    public function render()
    {
        $this->mixes = $this->tracklist->mixes;
        return view('livewire.tracklist.tracklist');
    }

    public function like($mixId) {
        $mix = Mix::find($mixId);
        auth()->user()->mixes()->attach($mix->id);
    }

    public function dislike($mixId) {
        $mix = Mix::find($mixId);
        auth()->user()->mixes()->detach($mix->id);
    }

    public function downloadFile($mixId)
    {
        $mix = Mix::find($mixId);

        $filePath = storage_path('app/public/' . $mix->audio);

        $filePath = str_replace('\\', '/', $filePath);

        if (!file_exists($filePath)) {
            abort(404);
        }

        $fileName = explode("/", $mix->audio);

        return Storage::download('public/' . $mix->audio, 'GrooveBox - '.$fileName[1]);
    }

    public function delete($tracklistId) {
        $tracklist = Tracklist::find($tracklistId);

        $this->tracklist = $tracklist;

        $tracklist->delete();

        $this->redirect('/personal-tracklists');
    }

    public function removeMix($mixId) {
        $this->tracklist->mixes()->detach($mixId);
        $this->tracklist = $this->tracklist->fresh();
    }
}
