<?php

namespace app\Models\Mix;

use app\Models\Artist\Artist;
use App\Models\Genre\Genre;
use app\Models\Tracklist\Tracklist;
use app\Models\User\User;
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
        return $this->belongsTo(Artist::class);
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
}
