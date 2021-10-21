<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('backoffice.user.all', compact('user'));
    }   

    public function create(){
        $role = Role::all();
        return view('backoffice.user.create', compact('role'));
    }  

    public function store(Request $request)
    {
        request()->validate([
            'name'=> ['required'],
            'email' => ['required'],
            'password' => ['required']
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        // pour crypte le mot de pass
        $user->password =  Hash::make($request->password) ;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect()->route('user.index');
    }

    public function show(User $user)
    {
        return view('backoffice.user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('backoffice.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        request()->validate([
            'name'=> ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        $user->password = $request->password;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect()->route('user.index');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
