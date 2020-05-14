<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class FetchController extends Controller
{
    // public function fetch()
    // {
    //     return view('fetch');
    // }

    public function fetch()
    {
        $users = DB::select('select * from users where ISNULL(username)');
        
        return view('fetch',['users'=>$users]);
     }

     
}
