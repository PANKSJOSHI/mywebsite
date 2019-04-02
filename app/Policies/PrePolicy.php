<?php

namespace App\Policies;

use App\User;
use App\POST;
use Illuminate\Auth\Access\HandlesAuthorization;

class PrePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the p o s t.
     *
     * @param  \App\User  $user
     * @param  \App\POST  $pOST
     * @return mixed
     */
    public function view(User $user, POST $pOST)
    {
        //
    }

    /**
     * Determine whether the user can create p o s t s.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the p o s t.
     *
     * @param  \App\User  $user
     * @param  \App\POST  $pOST
     * @return mixed
     */
    public function update(User $user, POST $pOST)
    {
        //
    }

    /**
     * Determine whether the user can delete the p o s t.
     *
     * @param  \App\User  $user
     * @param  \App\POST  $pOST
     * @return mixed
     */
    public function delete(User $user, POST $pOST)
    {
        //
    }

    /**
     * Determine whether the user can restore the p o s t.
     *
     * @param  \App\User  $user
     * @param  \App\POST  $pOST
     * @return mixed
     */
    public function restore(User $user, POST $pOST)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the p o s t.
     *
     * @param  \App\User  $user
     * @param  \App\POST  $pOST
     * @return mixed
     */
    public function forceDelete(User $user, POST $pOST)
    {
        //
    }
}
