<?php

namespace App\Models\User;

use App\Models\Artist\Artist;
use App\Models\Mix\Mix;
use App\Models\Tracklist\Tracklist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname_first',
        'lastname_second',
        'username',
        'email',
        'password',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function artist() {
        return $this->hasOne(Artist::class);
    }

    public function mixes() {
        return $this->belongsToMany(Mix::class);
    }

    public function tracklists() {
        return $this->hasMany(Tracklist::class);
    }

    public function hasArtist() {

        $hasArtist = Artist::where('user_id', $this->id)->exists();

        if ($hasArtist) {
            return true;
        }
        return false;
    }
}
