<?php

namespace App\Http\Livewire\Artist;

use App\Models\Mix\Mix;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Artist extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $mixes, $artist;

    /**
     * Function to render the view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.artist.artist');
    }

    /**
     * Gets the Artist's ID from the URL and get all his data.
     * @param $artist
     * @return void
     */
    public function mount($artist) {

        $this->artist = \App\Models\Artist\Artist::find($artist);

        $this->mixes = Mix::where('author', $artist)->where('privacy', 0)->paginate(15);

        if (auth()->check()) {
            if (auth()->user()->hasArtist()) {
                if (auth()->user()->artist->id == $artist) {
                    $this->mixes = Mix::where('author', $artist)->paginate(15);
                }
            }
        }
    }

    /**
     * Add the Mix to Likes to the authenticated User
     * @param $mixId int Mix's ID
     * @return void
     */
    public function like($mixId) {
        $this->artist = Mix::find($mixId)->artist;
        $this->mixes = Mix::where('author', $this->artist->id)->paginate(15);
        $mix = Mix::find($mixId);
        auth()->user()->mixes()->attach($mix->id);
    }

    /**
     * Remove the Mix to Likes to the authenticated User
     * @param $mixId int Mix's ID
     * @return void
     */
    public function dislike($mixId) {
        $this->artist = Mix::find($mixId)->artist;
        $this->mixes = Mix::where('author', $this->artist->id)->paginate(15);
        $mix = Mix::find($mixId);
        auth()->user()->mixes()->detach($mix->id);
    }

    /**
     * The Client Downloads the Mix's Audio
     * @param $mixId int Mix's ID
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function downloadFile($mixId)
    {
        $this->artist = Mix::find($mixId)->artist;
        $this->mixes = Mix::where('author', $this->artist->id)->paginate(15);

        $mix = \App\Models\Mix\Mix::find($mixId);

        $this->mix = $mix;

        $filePath = storage_path('app/public/' . $mix->audio);

        $filePath = str_replace('\\', '/', $filePath);

        if (!file_exists($filePath)) {
            abort(404);
        }

        $fileName = explode("/", $mix->audio);

        return Storage::download('public/' . $mix->audio, 'GrooveBox - '.$fileName[1]);
    }
}
