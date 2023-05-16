<?php

namespace ZepoBill\Support\Traits;

use Illuminate\Support\Facades\Auth;

trait CurrentUser
{
    /**
     * Ger current user id.
     *
     * @return mixed
     */
    public static function currentUserId(): mixed
    {
        if (app()->runningInConsole()) {
            return
                config('support.models.user')::first()->id ??
                config('auth.providers.users.model')::first()->id;
        }

        if (Auth::check()) {
            return Auth::id();
        }

        return 0;
    }
}
