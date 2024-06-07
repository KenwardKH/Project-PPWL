<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class MemberController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $users = User::all(); // Retrieve all users
            return view('members', ['members' => $users]);
        } else {
            abort(403, 'Unauthorized.');
        }
    }
    public function destroy(Request $request, $id)
    {
        $user = User::find($id); // Assuming your User model is named User
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
        $user->delete();
        return redirect()->route('members')->with('success', 'User deleted successfully.');
    }
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('edit_user', compact('user'));
    }
    public function update(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|min:1|max:255',
            'email' => 'required|email|max:255', // assuming email field
        ]);

        $user = User::find($request->id);
        $user->name = $validation['name'];
        $user->email = $validation['email'];
        $user->save();
        return redirect()->route('members')->with('success', 'User updated successfully.');
    }   

}
