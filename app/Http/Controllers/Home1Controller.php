<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use App\Models\Team;
use App\Models\User;

class Home1Controller extends Controller
{
    public function index(){
        $data=team::all();
        return view ("/home1",compact('data'));
    }
    public function redirect(){
        $data=team::all();
        $usertype = Auth::user()->usertype;

        if($usertype=="0"){
            return view("admin",compact('data'));
        }
        else
        {
            return view ("home1");
        }
    }
    public function destroy(Request $request, $id)
    {
        Auth::logout();
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }
}
