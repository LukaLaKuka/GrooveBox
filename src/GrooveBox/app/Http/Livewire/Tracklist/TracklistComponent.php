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

    /**
     * Get the actual Tracklist
     * @param $tracklistId int Tracklist's ID
     * @return void
     */
    public function mount($tracklistId) {
        $this->tracklist = Tracklist::find($tracklistId);
    }

    /**
     * Render the component's view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->mixes = $this->tracklist->mixes;
        return view('livewire.tracklist.tracklist');
    }

    /**
     * Add the mix to liked for the authenticated user
     * @param $mixId
     * @return void
     */
    public function like($mixId) {
        $mix = Mix::find($mixId);
        auth()->user()->mixes()->attach($mix->id);
    }

    /**
     * Removes the mix to liked for the authenticated user
     * @param $mixId
     * @return void
     */
    public function dislike($mixId) {
        $mix = Mix::find($mixId);
        auth()->user()->mixes()->detach($mix->id);
    }

    /**
     * Makes the client download the Mix Audio
     * @param $mixId int Mix's ID
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
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

    /**
     * Delete the actual tracklist
     * @param $tracklistId int Tracklist's ID
     * @return void
     */
    public function delete($tracklistId) {
        $tracklist = Tracklist::find($tracklistId);

        $this->tracklist = $tracklist;

        $tracklist->delete();

        $this->redirect('/personal-tracklists');
    }

    /**
     * Remove the Mix given from this tracklist
     * @param $mixId int Mix's ID
     * @return void
     */
    public function removeMix($mixId) {
        $this->tracklist->mixes()->detach($mixId);
        $this->tracklist = $this->tracklist->fresh();
    }
}
