<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\error;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
//        $request->user()->tokens()->delete();
//        $token = $request->user()->createToken('api-token');

//        $request->session()->put('api-token', $token->plainTextToken);



        return response()->redirectToRoute('home');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): Response
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

//        $request->user()->tokens()->delete();
        $request->session()->regenerateToken();

        return response()->noContent();
    }
}
