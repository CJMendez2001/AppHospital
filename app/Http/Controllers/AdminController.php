<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function redirect()
{
    if (Auth::check()) {
        if (Auth::user()->usertype == 1) {
            // User is authenticated and has usertype = 1 (admin)
            return view('admin.index');
        } else {
            // Redirect to some other view for usertype other than 1
            return redirect()->route('some.other.route');
        }
    } else {
        // User is not authenticated, redirect back or to login page
        return redirect()->back();
    }
}
}
