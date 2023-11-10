<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view("home");
    }

    public function registerview(){
        return view("auth.register");
    }
    public function loginview(){
        return view("auth.login");
    }
    public function login(Request $request){
       
       
         $this->validate($request,[
            "email"=> "",
            "password"=> ""
            ]);

            if ($request->user_type == "user"){
                if(Auth::guard('user')->attempt(["email"=> $request->email,"password"=> $request->password])){
                    return redirect('/');
                }else{
                    return redirect()->back()->with('error','password and username are rong');
                }
            }else{
                if(Auth::guard('owner')->attempt(["email"=> $request->email,"password"=> $request->password])){
                    return redirect('/');
                }else{
                    return redirect()->back()->with('error','password and username are rong');
                }
            }

           
            
    }

    public function register(Request $request){
      
        $this->validate($request,[
            "email"=> "",
            "password"=> "",
            ]);

            if ($request->user_type == "user"){
                $user = User::create($request->all());
                if($user){
                    return redirect("/")->with("success","your registration success");
                }
                return redirect()->back()->with("error","registration failed");
            }else{
                $user = Owner::create($request->all());
                if($user){
                    return redirect("/")->with("success","your registration success");
                }
                return redirect()->back()->with("error","registration failed");
            }
            // $user = new User();
            // $user->email = $request->email;
            // $user->password = $request->password;
            // $user->save();
            // return redirect()->route('home')->with("success","register successfull");
        
        }
        public function logout(){

            if(Auth::guard('admin')->check()){
                \Session::flush();
                Auth::guard('admin')->logout();
                return redirect()->route("home")->with("success","you are logout");
            }

            if(Auth::guard('user')->check()){
                \Session::flush();
                Auth::guard('user')->logout();
                return redirect()->route("home")->with("success","you are logout");
            }
             
            if(Auth::guard('owner')->check()){
                \Session::flush();
                Auth::guard('owner')->logout();
                return redirect()->route("home")->with("success","you are logout");
            }
            // if(Auth::guard('user')->check()){
            //     \Session::flush();
            //     Auth::guard("user")->logout();
            // }else{
            //     \Session::flush();
            //     Auth::guard("user")->logout();
            // }
        
        }
 }
