<?php

namespace App\Http\Livewire\Additional;

use Livewire\Component;

class UserManage extends Component
{
    public $user;

    /**
     * Function to render the view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->user = auth()->user();
        return view('livewire.additional.user-manage');
    }

    /**
     * Logout the user
     * @return void
     */
    public function signOut() {
        auth()->logout();
        redirect('/home');
    }
}
