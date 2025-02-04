<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = User::where('role', '=', 'user')->get();
        return view('admin.users', compact('users'));
    }
    
    public function createUsers()
    {
        return view('admin.create-users');
    }

    public function storeUsers(Request $request): RedirectResponse
    {

        // $request->validate([
        //     'firstName' => ['required', 'string', 'max:255'],
        //     'lastName' => ['required', 'string', 'max:255'],
        //     'phoneNum' => ['required'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        //     'dob' => ['required', 'string'],
        //     'country' => ['required', 'string'],
        //     'city' => ['required', 'string'],
        //     'address' => ['required', 'string'],
        // ]);

        $users = new User();
        $users->firstName = $request->firstName;
        $users->lastName = $request->lastName;
        $users->phoneNum = $request->phoneNum;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->dob = $request->dob;
        $users->country = $request->country;
        $users->city = $request->city;
        $users->address = $request->address;
        $users->role = 'user';
        $users->save();

        return redirect('admin-users');
    }

    public function editUsers($id)
    {
        $users = User::find($id);
        return view('admin.edit-users', compact('users'));
    }

    public function updateUsers(Request $request, $id): RedirectResponse
    {
        $users = User::find($id);
        $users->firstName = $request->firstName;
        $users->lastName = $request->lastName;
        $users->phoneNum = $request->phoneNum;
        $users->email = $request->email;
        $users->dob = $request->dob;
        $users->country = $request->country;
        $users->city = $request->city;
        $users->address = $request->address;
        $users->save();

        return redirect('admin-users');
    }

    public function deleteUsers($id)
    {
        User::find($id)->delete();
        return redirect('admin-users');
    }
}
