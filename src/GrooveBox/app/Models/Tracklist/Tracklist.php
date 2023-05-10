<?php

namespace app\Models\Tracklist;

use App\Models\Mix\Mix;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracklist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'privacy',
        'image',
    ];

    protected $table = "tracklists";

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function mixes() {
        return $this->belongsToMany(Mix::class);
    }
}
