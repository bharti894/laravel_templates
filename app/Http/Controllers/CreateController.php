<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class CreateController extends Controller
{
    public function create()
    {
    return view('add');
    }


    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'email' => 'required|unique:users|email',
            'name' => 'required',
            'Mobileno'=>'integer|min:10'
        ]);
    
        if ($v->fails())
        {
        return $v->errors()->all();
        }
        else
        {
       $data = new User;
       $data->name=$request->input('name');
       $data->email=$request->input('email');
       $data->gender=$request->input('gender');
       $data->Mobileno= $request->input('Mobileno');
       $data->Hobby=implode($request->input('Hobby'));
       $data->file=$request->input('file');

        if ($request->hasfile('file')) //hasfile checks  file is already present in the request
        {
        $image = $request->file('file');
        
        $namewithextension = $image->getClientOriginalName(); //to get image extension
        list($namewoextn, $extn) = explode(".", $namewithextension);
        $filename = $namewoextn."_".time().".".$extn;//get file name

        $data->file=$filename; //here we set the the filename
        $image->move(public_path() . '/images/', $filename);
        }

       $data->save();
       return redirect ('/home');
   
}}
}