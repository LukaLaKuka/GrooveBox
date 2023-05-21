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

    public function mount($mixId) {
        $this->mixId = $mixId;
    }

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
    public function render()
    {
        return view('livewire.mixes.update-mix');
    }
}
