<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Gate;

class OrderPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true; //laikinai kol atsiras Roles
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $order
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Order $order): Response|bool
    {
        return $user->id === $order->user_id  || $user->role === User::ROLE_MANAGER  || $user->role === User::ROLE_ADMIN
            ? Response::allow()
            : Response::deny(__('user does not own order'));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): Response|bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $order
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Order $order): Response|bool
    {
        return $user->id === $order->user_id || $user->role === User::ROLE_MANAGER
            ? Response::allow()
            : Response::deny(__('user not authorized update product'));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $order
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Order $order): Response|bool
    {
        return $user->id === $order->user_id /** || $user->role === 'manager'  */
            ? Response::allow()
            : Response::deny(__('You do not own this order'));

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $order
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Order $order): Response|bool
    {
        return $user->role === User::ROLE_MANAGER
            ? Response::allow()
            : Response::deny(__('You do not own this order'));
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $order
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Order $order): Response|bool
    {
        return $user->role === User::ROLE_ADMIN
            ? Response::allow()
            : Response::deny(__('You do not own this order'));
    }
}
