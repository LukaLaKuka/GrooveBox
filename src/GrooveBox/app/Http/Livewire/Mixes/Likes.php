<?php

namespace App\Http\Livewire\Mixes;

use App\Models\Mix\Mix;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use function Livewire\str;

class Likes extends Component
{

    protected $mixes;

    /**
     * Render the component's view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->getFavoriteMixes();
        return view('livewire.mixes.likes');
    }

    /**
     * Get all the favorites mixes of the authenticated User
     * @return void
     */
    public function getFavoriteMixes() {
        $this->mixes = auth()->user()->mixes;
    }

    /**
     * Add this mix to liked for the authenticated user
     * @param $mixId int Mix's ID
     * @return void
     */
    public function like($mixId) {
        $mix = Mix::find($mixId);
        auth()->user()->mixes()->attach($mix->id);
    }

    /**
     * Remvoe this mix to liked for the authenticated user
     * @param $mixId int Mix's ID
     * @return void
     */
    public function dislike($mixId) {
        $mix = Mix::find($mixId);
        auth()->user()->mixes()->detach($mix->id);
    }

    /**
     * Makes the client download the Mix's audio
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
}
