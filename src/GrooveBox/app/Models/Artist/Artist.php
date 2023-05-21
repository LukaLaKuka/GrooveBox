<?php

namespace App\Models\Artist;

use app\Models\Mix\Mix;
use app\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_name',
        'image',
    ];

    public function mixes() {
        return $this->hasMany(Mix::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
