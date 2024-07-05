<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $title = 'My Profile';
        $user = User::where('id', Auth::user()->id)->first();
        return view('profile.index', compact ('title', 'user'));
    }

    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
    {
        $id_user = Auth::user()->id;
        $user = User ::find($id_user);
        
        $user->name = $request ->name;
        $user->email = $request ->email;
        $user->password = $request ->password;

        $user->save();
        session()->flash('success', 'Update Success');
        return redirect('profile');
    }
}
