<?php

namespace App\Policies;

use app\Models\Mix\Mix;
use app\Models\User\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MixPolicy
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
     * @param  \app\Models\Mix\Mix  $mix
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Mix $mix)
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
     * @param  \app\Models\Mix\Mix  $mix
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Mix $mix)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \app\Models\Mix\Mix  $mix
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Mix $mix)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \app\Models\Mix\Mix  $mix
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Mix $mix)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \app\Models\User\User  $user
     * @param  \app\Models\Mix\Mix  $mix
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Mix $mix)
    {
        //
    }
}
