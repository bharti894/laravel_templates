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
           
      $up= User::find($request['id']);
           //$data->update($request->all());
        
         
       $up-> name = $request->input('name');
       
       $up->gender= $request->input('gender');
       $up->email = $request->input('email');
       
       //$up->file = $request->input('file');
       $hobby = $request->input('Hobby');
      if (isset($hobby)) {
      $hobby = implode(" ", $hobby);
      } else {
      $hobby = '';
      }
      $up->hobby=$hobby;

      if ($request->hasfile('file')) //hasfile checks  file is already present in the request
      {
      $image = $request->file('file');
      
      $namewithextension = $image->getClientOriginalName(); //to get image extension
      list($namewoextn, $extn) = explode(".", $namewithextension);
      $filename = $namewoextn."_".time().".".$extn;//get file name

      //print_r($filename);

      $up->file=$filename; //here we set the the filename
      $image->move(public_path() . '/images/', $filename);
      }
      $up->save();
       
      //DB::update('update users set name = ?,email=?,gender=?,hobby=?,file=? where id = ?',[$name,$email,$gender,$hobby,$file,$id]);
        echo "Record updated successfully.<br/>";
        return redirect()->back()->with('success', 'Record updated successfully!');
     }
}
