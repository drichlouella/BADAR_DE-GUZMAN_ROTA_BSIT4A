<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use App\Providers\RouteServiceProvider;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = auth()->user();

        if ($user->role === 'admin') {
            return redirect()->intended(RouteServiceProvider::HOME);
        } elseif ($user->role === 'supplier') {
            return redirect()->intended('/products');
        }

        // Default fallback for any other roles
        return redirect()->intended('/');
    }
}
