<?php

namespace App\Http\Livewire\Artist;

use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateArtist extends Component
{
    use WithFileUploads;

    public $artist_name, $image, $previous_name;

    protected $rules = [
        'artist_name' => 'nullable|string',
        'image' => 'nullable|mimes:jpeg,png,gif',
    ];

    public function render()
    {
        return view('livewire.artist.update-artist');
    }

    public function mount() {
        $local_artist = auth()->user()->artist;
        $this->artist_name = $local_artist->artist_name;
    }

    /**
     * Function to store in database the Artist Updated Data
     * @return void
     */
    public function save() {
        $this->validate();

        $artist = auth()->user()->artist;

        if ($this->image) {
            $newImageName = time() . $this->image->getClientOriginalName();

            $path = 'artist/'.$newImageName;

            $this->image->storeAs('public/artist', $newImageName);

            $artist->image = $path;
        }

        if ($this->artist_name) {
            $artist->artist_name = $this->artist_name;
        }

        $artist->save();

        redirect('/artist/'.$artist->id);

    }
}
