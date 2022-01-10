<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
//use App\Models\Members;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

         $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|max:13',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));

       
        return redirect()->route('dashboard');
    }


}
 