<?php

namespace App\Http\Livewire\Mixes;

use App\Models\Mix\Mix;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use function Livewire\str;

class Likes extends Component
{

    protected $mixes;

    public function mount() {
        $this->getFavoriteMixes();
    }

    public function render()
    {
        $this->getFavoriteMixes();
        return view('livewire.mixes.likes');
    }

    public function getFavoriteMixes() {
        $this->mixes = auth()->user()->mixes;
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
}
