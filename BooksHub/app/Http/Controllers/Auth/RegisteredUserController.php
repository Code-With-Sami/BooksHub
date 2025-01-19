<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'phoneNum' => ['required'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'dob' => ['required', 'string'],
            'country' => ['required', 'string'],
            'city' => ['required', 'string'],
            'address' => ['required', 'string'],
        ]);

        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'phoneNum' => $request->phoneNum,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'dob' => $request->dob,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
        ]);

        event(new Registered($user));

        Auth::login($user);

        if (auth()->user()->role == "admin") {
            return redirect('admin-dashboard');
        } elseif (auth()->user()->role == "user") {
            return redirect('welcome');
        } else {
            // Default redirect if the role doesn't match "admin" or "user"
            return redirect('/login')->with('error', 'Unauthorized access!');
        }
    }
}
