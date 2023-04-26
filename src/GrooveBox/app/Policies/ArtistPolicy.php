<?php

namespace App\Policies;

use app\Models\Artist\Artist;
use app\Models\User\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArtistPolicy
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
     * @param  \app\Models\Artist\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Artist $artist)
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
     * @param  \app\Models\Artist\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Artist $artist)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \app\Models\Artist\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Artist $artist)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \app\Models\Artist\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Artist $artist)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \app\Models\Artist\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Artist $artist)
    {
        //
    }
}
