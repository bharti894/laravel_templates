<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;

class forgotpasswordController extends Controller
{

public function forgot()
{
return view('forgotpassword');
}

public function email(Request $request)
{
if($user= DB::table('users')->where('username', '=', $request->username)->first())
{
    return redirect()->intended('recoverpassword');
}
else
{
 return redirect()->back()->withErrors(['username' => trans('User does not exist')]);
}
}   //Check if the user exists

// if (User::where('username', $request->username)->first())
// {
// return redirect()->intended('recoverpassword');

// }

// else{
// return redirect('/forgotpassword');
// }
// }

public function change()
{
return view('recoverpassword');
}

public function reset(Request $request)
{
   
   $password = $request->password;
   $user = User::where($request->username)->first();
   //print_r($user);
   $user->password = \Hash::make($password);
   $user->update(); //or $user->save();
    return redirect('/login');
    


}
}
