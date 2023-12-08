<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{
    //
    public function redirect()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == '0') {
                return view('consulta.index');
            } elseif ($usertype == '1') {
                return view('admin.index');
            }
        }

        return redirect()->back();
    }


}
