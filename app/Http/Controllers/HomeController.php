<?php

namespace App\Http\Controllers;

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
        return view('dashboard.home');
    }

    public function calendar()
    {
        return view('dashboard.calendar');
    }

    public function members()
    {
        return view('dashboard.members');
    }

    public function orders()
    {
        return view('dashboard.orders');
    }

    public function requests()
    {
        return view('dashboard.requests');
    }

    public function messages()
    {
        return view('dashboard.messages');
    }

    public function print()
    {
        return view('dashboard.print');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function setting()
    {
        return view('dashboard.setting');
    }

    public function visits()
    {
        return view('dashboard.visits');
    }

    
}
