<?php

namespace App\Models\Mix;

use App\Models\Artist\Artist;
use App\Models\Genre\Genre;
use App\Models\Tracklist\Tracklist;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mix extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'audio',
        'image',
        'privacy',
    ];

    public function artist() {
        return $this->belongsTo(Artist::class, 'author');
    }

    public function genres() {
        return $this->belongsToMany(Genre::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function tracklists() {
        return $this->belongsToMany(Tracklist::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($mix) {
            $mix->tracklists()->detach();
            $mix->users()->detach();
        });
    }
}
