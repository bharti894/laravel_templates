<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DeleteController extends Controller
{
    public function index() 
    {
        $users = DB::select('select * from users');
        return view('fetch',['users'=>$users]);
     }

    public function delete($id) {
        DB::delete('delete from users where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        return redirect()->back()->with('success', 'Record deleted successfully!');  
     }
}
