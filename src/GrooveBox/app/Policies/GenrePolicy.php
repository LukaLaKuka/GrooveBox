<?php

namespace App\Policies;

use App\Models\Genre\Genre;
use Illuminate\Auth\Access\HandlesAuthorization;
use app\Models\User\User;

class GenrePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \app\Models\User\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \App\Models\Genre\Genre  $genre
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Genre $genre)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \app\Models\User\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \App\Models\Genre\Genre  $genre
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Genre $genre)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \App\Models\Genre\Genre  $genre
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Genre $genre)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \App\Models\Genre\Genre  $genre
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Genre $genre)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \App\Models\Genre\Genre  $genre
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Genre $genre)
    {
        //
    }
}
