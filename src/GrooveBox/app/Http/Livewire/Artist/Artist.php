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
    public function render()
    {

        return view('livewire.artist.artist');
    }

    public function mount($artist) {

        $this->artist = \App\Models\Artist\Artist::find($artist);

        if (auth()->user()->hasArtist()) {
            if (auth()->user()->artist->id == $artist) {
                $this->mixes = Mix::where('author', $artist)->paginate(15);
            } else {
                $this->mixes = Mix::where('author', $artist)->where('privacy', 0)->paginate(15);
            }
        } else {
            $this->mixes = Mix::where('author', $artist)->where('privacy', 0)->paginate(15);
        }
    }

    public function like($mixId) {
        $this->artist = Mix::find($mixId)->artist;
        $this->mixes = Mix::where('author', $this->artist->id)->paginate(15);
        $mix = Mix::find($mixId);
        auth()->user()->mixes()->attach($mix->id);
    }

    public function dislike($mixId) {
        $this->artist = Mix::find($mixId)->artist;
        $this->mixes = Mix::where('author', $this->artist->id)->paginate(15);
        $mix = Mix::find($mixId);
        auth()->user()->mixes()->detach($mix->id);
    }

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
