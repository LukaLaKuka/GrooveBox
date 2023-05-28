<?php

namespace App\Http\Livewire\Tracklist;

use App\Models\Tracklist\Tracklist;
use Exception;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewTracklist extends Component
{

    use WithFileUploads;

    public $name, $description, $privacy = 0, $image;

    protected $rules = [
        'name' => 'required|string',
        'description' => 'required|string',
        'privacy' => 'boolean',
        'image' => 'image|mimes:jpeg,png,gif',
    ];

    /**
     * Render the component's view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.tracklist.new-tracklist');
    }

    /**
     * Stores the new Tracklist data
     * @return never|void
     */
    public function save() {
        $this->validate();
        try {
            $tracklist = new Tracklist();

            if (!$this->image) {
                throw new \Exception('The image is not valid');
            }

            $newImageName = time() . str_replace(" ", "", $this->image->getClientOriginalName());

            $imagePath = 'mix/'.$newImageName;

            $this->image->storeAs('public/mix', $newImageName);

            $tracklist->name = $this->name;
            $tracklist->description = $this->description;
            $tracklist->image = $imagePath;
            $tracklist->privacy = $this->privacy;
            $tracklist->user_id = auth()->user()->id;

            $tracklist->save();

            redirect('/tracklist/'.$tracklist->id);

        } catch (Exception $exception) {
            return dd($exception);
        }
    }
}
