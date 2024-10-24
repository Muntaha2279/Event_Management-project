<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create() {
        return view('register');
    }

    public function createuser(Request $request) {
        // $formFields = $request->validate([
        //     'name' => ['required', 'min:3'],
        //     'email' => ['required', 'min:4'],
        //     'password' => ['required', 'min:3'],
        //     'mobile' => ['required', 'min:10'],
        //     'address' => ['required', 'min:3'],
        // ]);

        // $formFields['password'] = bcrypt($formFields['password']);

        // $user = User::create($formFields);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);
        $user->utype = "";

        $user->save();

        auth()->login($user);

        return redirect('/all-events');
    }

    public function login(Request $request) {
        $formFields = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/all-events');
        }

        return redirect('/');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
