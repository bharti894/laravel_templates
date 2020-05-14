<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

public function index()
{
    if($user = Auth::user())// to fetch user details by token
    {
        $users = DB::select('select * from users where ISNULL(username)');
        return view('home', ['user_count'=>sizeof($users), 'admin'=>$user]);
    }
}



}
