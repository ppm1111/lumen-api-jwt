<?php

namespace App\Domain\User\Actions;
use Illuminate\Support\Facades\Auth;

use App\Infrastructure\Controllers\Controller;
use Illuminate\Http\Request;

class LoginAction extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (! $token = Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }
}
