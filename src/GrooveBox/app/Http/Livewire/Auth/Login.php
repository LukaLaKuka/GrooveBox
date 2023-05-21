<?php

namespace App\Http\Livewire\Auth;

use App\Models\User\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email, $password;

    protected $rules = [
        'email' => 'nullable|email',
        'password' => 'nullable|string|min:6',
    ];

    public function mount() {
        if (auth()->check()) {
            redirect('/home');
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login() {

        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];


        if (Auth::attempt($credentials)) {
            redirect('/home');
        } else {
            redirect('/register');
        }
    }
}
