<?php

namespace App\Models\Genre;

use app\Models\Mix\Mix;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function mixes() {
        return $this->belongsToMany(Mix::class);
    }
}
