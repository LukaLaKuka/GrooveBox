<?php

namespace App\Http\Livewire\Auth;

use App\Models\User\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Register extends Component
{
    use WithFileUploads;

    public $name, $username, $first_lastname, $second_lastname, $email, $password, $confirm_password, $image;

    protected $rules = [
        'name' => 'required|string',
        'username' => 'required|string|unique:users,username',
        'first_lastname' => 'required|string',
        'second_lastname' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Cambia 'required' a 'nullable'
    ];

    public function mount() {
        if (auth()->check()) {
            redirect('/home');
        }
    }

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function register() {

        $this->validate();

        try {
            if ($this->password == $this->confirm_password) {
                $user = new User();

                $newImageName = time() . str_replace(" ", "", $this->image->getClientOriginalName());

                $this->image->storeAs('public/profile', $newImageName);

                $path = 'profile/'.$newImageName;

                $user->name = $this->name;
                $user->username = $this->username;
                $user->lastname_first = $this->first_lastname;
                $user->lastname_second = $this->second_lastname;
                $user->email = $this->email;
                $user->password = Hash::make($this->password);
                $user->image = $path;// Aquí puedes asignar el valor deseado o dejarlo como está

                $user->save();

                $credentials = [
                    'email' => $this->email,
                    'password' => $this->password,
                ];

                Auth::attempt($credentials);

                return redirect('/home');
            }
        } catch (Exception $e) {
            return $e;
        }


        return redirect('login');
    }
}
