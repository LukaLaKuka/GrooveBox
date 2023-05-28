<?php

namespace App\Http\Livewire\Mixes;

use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateMix extends Component
{
    use WithFileUploads;

    protected $rules = [
        'name' => 'nullable',
        'description' => 'nullable',
        'privacy' => 'nullable',
    ];

    public $mixId;
    public $name;
    public $description;
    public $privacy = 0;

    /**
     * Get the mix's ID
     * @param $mixId int Mix's ID
     * @return void
     */
    public function mount($mixId) {
        $this->mixId = $mixId;
    }

    /**
     * Stores the new data of the Mix
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save() {

        $this->validate();

        $mix = \App\Models\Mix\Mix::findOrFail($this->mixId);

        if ($this->name) {
            $mix->name = $this->name;
        }

        if ($this->description) {
            $mix->description = $this->description;
        }

        if ($this->privacy) {
            $mix->privacy = $this->privacy;
        } else {
            $mix->privacy = 0;
        }

        $mix->save();

        return redirect('/mix/'.$mix->id);
    }

    /**
     * Render the component's view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.mixes.update-mix');
    }
}
