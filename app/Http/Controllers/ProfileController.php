<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; 
use Validator;

class ProfileController extends Controller
{
public function profile()
{
    if($user = Auth::user())// to fetch user details by token
    {
        return view('profile',['user'=>$user]);
    }
}

public function changePass(Request $request)
{
    /*find id from database*/
    // $user = User::find($request->);

    if($user = Auth::user())// to fetch user details by token
    {
        /*
        * Validate all input fields
        */
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required|min:6|different:password',
            ]);
        
        /*Check password with exist user password
        * if exist password is right then accept request and update_password
        * else return false
        */
        if (Hash::check($request->old_password, $user->password)) { 
        $user->fill([
        'password' => Hash::make($request->new_password)
        ])->save();
        
        return 'password updated successfully';
        
        } 
        else 
        {
        return "Your current password does not matches with the password you provided. Please try again.";
        }
    } else {
        echo "did not authenticate";
    }

}


public function updateprofile(Request $request) {
    
    $rules = array (
        'email'=> 'unique:users|email',
        'file' => 'mimes:jpeg,png,jpg'
    );

    $validator = Validator::make($request->all(), $rules);
  
    //retrieve single records using find, 
    if($user = Auth::user())
    {
   
    if ($request['name'] != null) {
      $user->name = $request['name'];
    }
    if ($request['email'] != null) {
      $user->email= $request['email'];
    }
    
    if ($request['location'] != null) {
      $user->location= $request['location'];
    }
   
    if ($request->hasfile('file')) //hasfile checks  file is already present in the request
    {
    $image = $request->file('file');
    
    $namewithextension = $image->getClientOriginalName(); //to get image extension
    list($namewoextn, $extn) = explode(".", $namewithextension);
    $filename = $namewoextn."_".time().".".$extn;//get file name

    $user->file=$filename; //here we set the the filename
    $image->move(public_path() . '/images/', $filename);
    }
    
    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully!');
    }
    else
    {
        return redirect()->back()->with('Failed', 'Try again');
    }
    
}      


}
