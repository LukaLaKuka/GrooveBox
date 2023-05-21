<?php

namespace App\Http\Livewire\Mixes;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Mix extends Component
{
    protected $mix;
    public function render()
    {
        return view('livewire.mixes.mix');
    }

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

    public function delete($mixId) {

        $mix = \App\Models\Mix\Mix::find($mixId);

        $this->mix = $mix;

        $mix->delete();

        $this->redirect('/like');
    }

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

    public function like($mixId) {
        $this->mix = \App\Models\Mix\Mix::find($mixId);
        $mix = \App\Models\Mix\Mix::find($mixId);
        auth()->user()->mixes()->attach($mix->id);
    }

    public function dislike($mixId) {
        $this->mix = \App\Models\Mix\Mix::find($mixId);
        $mix = \App\Models\Mix\Mix::find($mixId);
        auth()->user()->mixes()->detach($mix->id);
    }
}
