<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class HomeController extends Controller
{
    function dashboard()
    {
        $checkouts = Checkout::with('Camp')->whereuserid(Auth::userid())->get();
        return view('user.dashboard',[
            'checkouts' => $checkouts
        ]);
    }
}
