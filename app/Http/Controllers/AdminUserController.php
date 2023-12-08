<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    //
    public function index()
    {
        return view('admin.indexp');
    }

    public function listUsers()
    {
        $users = User::all();

        return view('admin.indexp', ['users' => $users]);
    }
}
