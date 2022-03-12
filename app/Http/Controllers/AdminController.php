<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\signup;
use App\Http\Requests\StoreadminRequest;
use App\Http\Requests\UpdateadminRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  
    public function adminget()
    {
     return view ('admin.login');
    }
    
    public function auth(Request $request)
    {
     
        $result = signup::where('email', $request->email)
            ->where('password', $request->password)
            
            ->first();

        if ($result['usertype']=='customer') {
            $request->session()->put('email', $request->email);
          
            return"hoga";
        }
        if ($result['usertype']=='manager') {
            $request->session()->put('email', $request->email);
          
            return"aiub";
        }
        if ($result['usertype']=='admin') {
            $request->session()->put('email', $request->email);
          
            return view('admin.dashboard');
        }
        else{
            $request->session()->flash('msg', 'invaild credentials');
            return redirect('admin');
        }
    }

    public function crudget()
    {
        $clients = signup::all();
        return view("userscrud", ['clients' => $clients]);
    }

    public function deleteget($id)
    {
        $clients = signup::destroy($id);
        return redirect(Route('userscrud'));
    }
    public function editget($id)
    {
        $clients = signup::find($id);
        return view('useredit', ['clients' => $clients]);
    }
    public function updatepost(Request $request, $id)
    {
        $clients = signup::find($id);
        $clients->firstname = $request->firstname;
        $clients->lastname = $request->lastname;
        $clients->email = $request->email;
        $clients->password = $request->password;
        $clients->phone = $request->phone;
        $clients->usertype = $request->usertype;
        $clients->address = $request->address;
        $clients->save();
        return redirect(Route('userscrud'));
    }




}
