<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
//use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function login()
    {
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('login');
    }
    function register()
    {
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('register');
    }
    function loginpost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        return redirect(route('login'))->with('error', 'Credentials are not valid!');
    }
    function registerpost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $insert = new User();
        $insert->name = $request->name;
        $insert->email = $request->email;
        $insert->password = $request->password;
        $insert->save();
        if (!$insert) {
            return redirect(route('register'))->with('error', 'Registeration failed!');
        } else {
            return redirect(route('login'))->with('success', 'Registeration Successfull!');
        }
    }
    public function display(){
        $insert=User::all();
        return view('dashboard',['insert'=>$insert]);
    }
       function logout()
    {
        session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
    public function insert(Request $request){
        $insert=new User();
        $insert->name=$request->name;
        $insert->email=$request->email;
        $insert->password=$request->password;
        $insert->save();
        return redirect(route('dashboard'));
    }
    public function edit($id){
        $insert=User::find($id);
        return view('edit',['insert'=>$insert]);
    }
    public function update(Request $request, string $id){
        $insert=User::find($id);
        $insert->name=$request->name;
        $insert->email=$request->email;
        $insert->password=$request->password;
        $insert->save();
        return view('dashboard',['insert'=>$insert]);
    }
    public function delete($id){
        User::destroy($id);
        return redirect(route('dashboard'));
    }
    public function user(User $id){
        return view('dashboard',compact('id'));
    }
}
