<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminView()
    {
        $usersTotal = User::count();
        $phonesTotal = Phone::count();
        return view('dashboard', compact('usersTotal', 'phonesTotal'));
    }
}
