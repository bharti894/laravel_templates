<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class EdituserController extends Controller
{

     public function show($id) {
        $user = DB::select('select * from users where id = ?',[$id]);
        return view('/edituser',['user'=>$user]);
     }

     public function edit(Request $request,$id) {
        
        $name = $request->input('name');
        $gender= $request->input('gender');
        $hobby= implode($request->input('Hobby'));
        $email = $request->input('email');
        $file = $request->input('file');

      if ($request->hasfile('file')) //hasfile checks  file is already present in the request
      {
      $image = $request->file('file');
      
      $namewithextension = $image->getClientOriginalName(); //to get image extension
      list($namewoextn, $extn) = explode(".", $namewithextension);
      $filename = $namewoextn."_".time().".".$extn;//get file name

      $file->file=$filename; //here we set the the filename
      $image->move(public_path() . '/images/', $filename);
      }
       
        DB::update('update users set name = ?,email=?,gender=?,hobby=?,file=? where id = ?',[$name,$email,$gender,$hobby,$file,$id]);
        echo "Record updated successfully.<br/>";
        return redirect()->back()->with('success', 'Record updated successfully!');
     }
}
