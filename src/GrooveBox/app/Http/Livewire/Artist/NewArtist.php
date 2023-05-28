<?php

namespace App\Http\Livewire\Artist;

use Exception;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewArtist extends Component
{
    use WithFileUploads;

    public $artist_name, $image;

    protected $rules = [
        'artist_name' => 'required|string',
        'image' => 'image|mimes:jpeg,png,gif',
    ];

    /**
     * Renders the component's view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.artist.new-artist');
    }

    /**
     * Checks if this user has artist or not
     * @return void
     */
    public function mount() {
        if (auth()->user()->hasArtist()) {
            redirect('/artist/'.auth()->user()->artist->id);
        }
    }

    /**
     * Function to store in database the new Artist Data
     * @return void
     */
    public function save() {
        $this->validate();
        try {
            $artist = new \App\Models\Artist\Artist();

            if (!$this->image) {
                throw new \Exception('The image is not valid');
            }

            $newImageName = time() . str_replace(" ", "", $this->image->getClientOriginalName());

            $path = 'artist/'.$newImageName;

            $this->image->storeAs('public/artist', $newImageName);

            $artist->artist_name = $this->artist_name;
            $artist->image = $path;
            $artist->user_id = auth()->user()->id;

            $artist->save();

            redirect('/artist/'.$artist->id);

        } catch (Exception $exception) {
            dd($exception);
        }
    }
}
