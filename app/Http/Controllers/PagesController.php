<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Dcblogdev\MsGraph\Facades\MsGraph;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDO;

class PagesController extends Controller
{
    public function index()
    {
        $data = DB::connection('sqlsrv')->table('OUSR')->select(['USERID','U_NAME'])->get();

        return view('ousr_table', compact('data'));
    }
    public function pdoIndex()
    {
        //$pdo = DB::connection('sqlsrv')->getPDO();
        //dd(MsGraph::get('me'));
        $msuser =  MsGraph::get('me');
        // $serverInfo = $pdo->getAttribute(PDO::ATTR_SERVER_INFO);
        // $driverVersion = $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION);
        // $data = [
        //     'SERVER_INFO' => $serverInfo,
        //     'CLIENT_VERSION' => $driverVersion,
        // ];
        $data[] = $msuser;
      
        return view('ms_user_table', compact('data'));
    }
    public function app()
    {
        //dd(MsGraph::get('me'));

        //dd("hello");
        // dd(DB::connection('sqlsrv')->table('OUSR')->first());
        // dd(DB::connection('sqlsrv')->getPDO());
       // dd(DB::connection()->getDatabaseName());
    }
}
