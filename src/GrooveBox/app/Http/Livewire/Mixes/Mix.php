<?php

namespace App\Http\Livewire\Mixes;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Mix extends Component
{
    protected $mix;

    /**
     * Render the component's view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.mixes.mix');
    }

    /**
     * Get this mix and checks if is valid and you are the authenticathed user.
     * @param $mixId int Mix's ID
     * @return void
     */
    public function mount($mixId)
    {
        $this->mix = \App\Models\Mix\Mix::find($mixId);

        if (is_null($this->mix)) {
            redirect('/home');
        } else {
            if ($this->mix->privacy == 1) {
                if (auth()->check()) {
                    if (auth()->user()->artist->id != $this->mix->author) {
                        redirect('/home');
                    }
                } else {
                    redirect('/home');
                }
            }
        }

    }

    /**
     * Deletes from BBDD the Mix given
     * @param $mixId int Mix's ID
     * @return void
     */
    public function delete($mixId) {

        $mix = \App\Models\Mix\Mix::find($mixId);

        $this->mix = $mix;

        $mix->delete();

        $this->redirect('/artist/'.auth()->user()->artist->id);
    }

    /**
     * Makes the client download the Mix's Audio
     * @param $mixId int Mix's ID
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function downloadFile($mixId)
    {
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

    /**
     * Add the mix to liked for the authenticated user
     * @param $mixId int Mix's ID
     * @return void
     */
    public function like($mixId) {
        $this->mix = \App\Models\Mix\Mix::find($mixId);
        $mix = \App\Models\Mix\Mix::find($mixId);
        auth()->user()->mixes()->attach($mix->id);
    }

    /**
     * Remove the mix to liked for the authenticated user
     * @param $mixId int Mix's ID
     * @return void
     */
    public function dislike($mixId) {
        $this->mix = \App\Models\Mix\Mix::find($mixId);
        $mix = \App\Models\Mix\Mix::find($mixId);
        auth()->user()->mixes()->detach($mix->id);
    }
}
