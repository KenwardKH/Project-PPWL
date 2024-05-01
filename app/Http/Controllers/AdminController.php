<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $users = User::all(); // Retrieve all users
            return view('admin', ['users' => $users]);
        } else {
            abort(403, 'Unauthorized.');
        }
    }

}
