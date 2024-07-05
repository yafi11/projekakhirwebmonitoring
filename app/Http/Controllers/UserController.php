<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Users';
        $level = ['qualitycontrol', 'procurement', 'manager'];

        // Menggunakan whereIn untuk mencocokkan peran (role) dengan array $roles
        $users = User::orderBy('id', 'desc')->whereIn('level', $level)->get();

        return view('user.index', compact('title', 'users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $user=new User();

        $user->name = $request ->name;
        $user->email = $request ->email;
        // Mengonversi format tanggal menggunakan Carbon
        $formattedDate = Carbon::parse($request->birthdate)->format('Ymd');
    
        // Mengenkripsi tanggal yang telah diubah formatnya
        $hashedDate = Hash::make($formattedDate);
        $user->password = $hashedDate;
        
        $user->level = $request ->level;

        $user->save();
        session()->flash('success', 'Update Success');
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user -> delete();
        session()->flash('danger', 'Delete Success');
        return redirect()->route('user.index');
    }
}
