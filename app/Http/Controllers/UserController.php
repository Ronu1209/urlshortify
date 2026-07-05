<?php

namespace App\Http\Controllers;

use App\Models\UrlShUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function viewReg() {
        return view('registration');
    }

    public function regUser(Request $request){

        if($request->name) {
            $UrlShUser = new UrlShUser();
            $username = $request->name;
            $email = $request->email;
            $password = Hash::make($request->password);

            $UrlShUser->user_name = $username;
            $UrlShUser->user_email = $email;
            $UrlShUser->user_pass = $password;

            $UrlShUser->save();

            return redirect('/registration');

        }
    }

    public function login() {
        return view('login');
    }

    public function loginUser(Request $req) {
        if($req->email) {
            $email = $req->email;
            $password = $req->password;

            $user = UrlShUser::where('user_email',$email)->get();

            if(count($user)==1) {

                $user_password = $user[0]->user_pass;

                if(Hash::check($password,$user_password)){
                    $req->session()->put('user_session', $user);

                    return redirect('/dashboard');
                } else{
                    return back()->with('error_msg', "login failed. Enter correct password");
                }

            } else {
                return back()->with('error_msg', "Enter correct Email Id");
            }
        }

    }

    public function viewDashboard(Request $req) {
        if($req->session()->has('user_session')){
            $sess_user = $req->session()->get('user_session');
            return view('dashboard',compact('sess_user'));
        } else{
            return redirect('/');
        }

    }

    public function logout(Request $req) {
        if($req->session()->has('user_session')) {
            $req->session()->forget('user_session');

            return redirect('/');
        } else {
            return redirect('/');
        }
    }

}
