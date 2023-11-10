<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {  
        $users = User::all();
        return view('users.index', ['users'=>$users]);
    }

    public function registerview(){
        return view("auth.adminreg");
    }
    public function loginview(){
        return view("auth.adminlog");
    }
    public function login(Request $request){
        $this->validate($request,[
           "email"=> "",
           "password"=> ""
           ]);
        
           if(Auth::guard('admin')->attempt(["email"=> $request->email,"password"=> $request->password])){

            return redirect()->route('admin.users');
              
           }else{
               return redirect()->back()->with('error','password and username are rong');
           }
       

            
           
        }


    public function register(Request $request){
      
        $this->validate($request,[
            "email"=> "",
            "password"=> "",
        ]);
       

        
        $user = Admin::create($request->all());
        if($user){
            return redirect()->route('admin.login')->with("success","your registration success");
        }
        return redirect()->back()->with("error","registration failed");
        
     }
        public function logout(){
            
            \Session::flush();
            Auth::guard("admin")->logout();
            return redirect()->route("admin.login")->with("success","you are logout");
        }
}
