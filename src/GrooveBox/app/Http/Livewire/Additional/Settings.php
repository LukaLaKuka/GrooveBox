<?php

namespace App\Http\Livewire\Additional;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{

    public $name, $username, $first_lastname, $second_lastname, $email, $password, $confirm_password, $image;

    use WithFileUploads;

    protected $rules = [
        'name' => 'nullable|string|max:20',
        'username' => 'nullable|string|unique:users,username',
        'first_lastname' => 'nullable|string',
        'second_lastname' => 'nullable|string',
        'email' => 'nullable|email|unique:users,email',
        'password' => 'nullable|string|min:6',
        'image' => 'nullable|image',
    ];

    /**
     * Function to render the view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.additional.settings');
    }

    /**
     * Stores the new data given
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save() {

        $this->validate();

        $user = auth()->user();

        if ($this->name) {
            $user->name = $this->name;
        }

        if ($this->username) {
            $user->username = $this->username;
        }

        if ($this->first_lastname) {
            $user->lastname_first = $this->first_lastname;
        }

        if ($this->second_lastname) {
            $user->lastname_second = $this->second_lastname;
        }

        if ($this->email) {
            $user->email = $this->email;
        }

        if ($this->image) {
            $newImageName = time() . str_replace(" ", "", $this->image->getClientOriginalName());

            $this->image->storeAs('public/profile', $newImageName);

            $path = 'profile/'.$newImageName;

            $user->image = $path;
        }

        if ($this->password || $this->confirm_password) {
            if ($this->password == $this->confirm_password) {
                $user->password = Hash::make($this->password);
            }
        }

        $user->save();
        return redirect('/home');
    }
}
