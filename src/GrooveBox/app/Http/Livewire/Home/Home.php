<?php

namespace App\Http\Livewire\Home;

use App\Models\Mix\Mix;
use App\Models\Tracklist\Tracklist;
use App\Models\User\User;
use Livewire\Component;

class Home extends Component
{

    public $mixes, $tracklists, $personal_mixes, $personal_tracklists, $message, $personal_lists;

    public function mount() {
        $this->message = $this->defineWelcomeMessage();
    }
    public function render()
    {
        $this->getValues();
        return view('livewire.home.home');
    }

    public function getValues() {
        $this->mixes = Mix::where('privacy', 0)->orderBy('created_at', 'desc')->take(8)->get();
        $this->tracklists = Tracklist::where('privacy', 0)->orderBy('created_at', 'desc')->take(8)->get();
        if (auth()->check()) {
            $this->personal_lists = true;
            $user = User::find(auth()->user()->id);
            if($user->hasArtist()) {
                $this->personal_mixes = Mix::where('author',$user->artist->id)->orderBy('created_at', 'desc')->take(8)->get();
            } else {
                $this->personal_mixes = Mix::take(0)->get();
            }
            $this->personal_tracklists = Tracklist::where('user_id', $user->id)->orderBy('created_at', 'desc')->take(8)->get();
        } else {
            $this->personal_lists = false;
        }

    }

    public function defineWelcomeMessage() {
        $actual_hour = date('H');

        if ($actual_hour < 12) {
            $message = 'Good Morning';
        } elseif ($actual_hour < 19) {
            $message = 'Good Afternoon';
        } else {
            $message = 'Good Night';
        }
        return $message;
    }

    public function like($mixId) {
        $mix = Mix::find($mixId);
        auth()->user()->mixes()->attach($mix->id);
    }

    public function dislike($mixId) {
        $mix = Mix::find($mixId);
        auth()->user()->mixes()->detach($mix->id);
    }


}
