<?php

namespace App\Http\Livewire\Additional;

use Livewire\Component;

class UserManage extends Component
{
    public $user;

    public function render()
    {
        $this->user = auth()->user();
        return view('livewire.additional.user-manage');
    }

    public function signOut() {
        auth()->logout();
        redirect('/home');
    }
}
