<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Dcblogdev\MsGraph\Facades\MsGraph;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDO;

class MasterController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        // if( $user->role == 'Admin')
        // {  

        // }
        // else
        // {

        // }

        return view('admin.dashboard', [
            'user'                  => $user,
        ]);
    }

    public function profile()
    {
        $user = auth()->user();

        return view('admin.dashboard', [
            'user'                  => $user,
        ]);
    }
}
