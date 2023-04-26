<?php

namespace app\Models\User;

use app\Models\Artist\Artist;
use app\Models\Mix\Mix;
use App\Models\Tracklist\Tracklist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
}
