<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        if (User::count() === 1) {
            // Se for o primeiro usuário, define o access_level como 'admin'
            $user->access_level = 'admin';
            $user->save();
        } else {
            // Caso contrário, mantém como 'user' (ou qualquer outro valor desejado)
            $user->access_level = 'user';
            $user->save();
        }
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
