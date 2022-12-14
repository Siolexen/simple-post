<?php

namespace App\Policies\Post;

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  User  $user
     * @param  Post  $post
     * @return mixed
     */
    public function view(User $user, Post $post)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array($user->role->name, [Role::ROLE_ADMIN, Role::ROLE_EDITOR]);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  User $user
     * @param  Post $post
     * @return mixed
     */
    public function update(User $user, Post $post)
    {
        return in_array($user->role->name, [Role::ROLE_ADMIN, Role::ROLE_EDITOR]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  User  $user
     * @param  Post $post
     * @return mixed
     */
    public function delete(User $user, Post $post)
    {
        return in_array($user->role->name, [Role::ROLE_ADMIN, Role::ROLE_EDITOR]);
    }
}
