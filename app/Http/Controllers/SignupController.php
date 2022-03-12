<?php

namespace App\Http\Controllers;

use App\Models\signup;
use App\Http\Requests\StoresignupRequest;
use App\Http\Requests\UpdatesignupRequest;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signupget()
    {
        return view('signup');
    }
    public function signuppost(Request $request)
    {
        $student = new signup();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->phone = $request->phone;
        $student->usertype = $request->usertype;
        $student->address = $request->address;
        $student->save();
        return redirect(Route('signup'));


    }
   
}
