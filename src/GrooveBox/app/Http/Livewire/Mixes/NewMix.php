<?php

namespace App\Http\Livewire\Mixes;

use Livewire\Component;
use Livewire\WithFileUploads;

class NewMix extends Component
{
    use WithFileUploads;

    public $name, $description, $audio, $image, $privacy = 0;

    protected $rules = [
        'name' => 'required|string',
        'description' => 'required|string',
        'privacy' => 'boolean',
        'audio' => 'file|mimetypes:audio/mpeg,audio/wav,audio/midi',
        'image' => 'image|mimes:jpeg,png,gif',
    ];

    /**
     * Render the component's view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.mixes.new-mix');
    }

    /**
     * Stores the new Mix given
     * @return void
     * @throws \Exception
     */
    public function save() {
        $this->validate();
        try {
            $mix = new \App\Models\Mix\Mix();

            if (!$this->image) {
                throw new \Exception('The image is not valid');
            }
            if (!$this->audio) {
                throw new \Exception('The audio is not valid');
            }

            $newImageName = time() . str_replace(" ", "", $this->image->getClientOriginalName());

            $newAudioName = time() . str_replace(" ", "", $this->audio->getClientOriginalName());

            $imagePath = 'mix/'.$newImageName;
            $audioPath = 'audio/'.$newAudioName;

            $this->image->storeAs('public/mix', $newImageName);
            $this->audio->storeAs('public/audio', $newAudioName);

            $mix->name = $this->name;
            $mix->description = $this->description;
            $mix->audio = $audioPath;
            $mix->image = $imagePath;
            $mix->privacy = $this->privacy;
            $mix->author = auth()->user()->artist->id;

            $mix->save();

            redirect('/mix/'.$mix->id);

        } catch (Exception $exception) {
            dd($exception);
        }
    }
}
