<?php

namespace App\Http\Livewire\Additional;

use Livewire\Component;

class UserManage extends Component
{
    public $user;
    public $message;

    public function mount() {
        $this->message = "test";
    }

    public function render()
    {
        return view('livewire.additional.user-manage');
    }

    public function signOut() {
        $this->user = null;
        $this->message = "usuario sin loguear";
    }

    public function login() {
        $this->user = true;
        $this->message = "usuario logueado";
    }
}
