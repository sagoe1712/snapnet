<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Session\Console\SessionTableCommand;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    private function insert_user($name, $email, $password){
        $create = Users::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
        if($create){
            return true;
        }else{
            return false;
        }
    }

    public function create_user(Request $request){
       
        $validator = Validator::make($request->all(), [
            "name" => "required|string",
            "email" => "required|email",
            "password" => "required|string|min:6",
        ]);

        if ($validator->fails()) {
            return redirect()->back($validator->errors(), $validator->errors()->first());
        }

        $hash_password = Hash::make($request->password);

        $insert = $this->insert_user($request->name, $request->email, $hash_password);

        if($insert){
            
            return redirect()->back()->withErrors(['message' => "Success. User has been created"]);
         
        }

    }

    private function verify_user($email, $password){
        $check = DB::table('users')->where('email', '=', $email)->where('password', '=', $password)->select('*')->first();
// dd($check);
        return $check;
    }

    public function showLoginForm(){
     return view('login');
    }
    
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            "email" => "required|email",
            "password" => "required|string",
        ]);

        if ($validator->fails()) {
            return redirect()->back($validator->errors(), $validator->errors()->first());
        }

        $hash_password = Hash::make($request->password);

        $verify_user = $this->verify_user($request->email, $hash_password);

// dd($verify_user);

        if(isset($verify_user)){

            $sessioncontrol = $this->createUserSession($verify_user->name,$verify_user->email);

            if(!$sessioncontrol){
            
                return redirect()->back()->withErrors(['message' => 'Something went wrong with the session management']);
            }

            return redirect()->back($validator->errors(), $validator->errors()->first());

            
        }else{
            return redirect()->back()->withErrors(['message' => 'Invalid Credential']);
            // return redirect()->back(200, "Invalid Credential", []);
        }
    }

    private function createUserSession($name, $email){
        session(['name' => $name]);
        session(['email' => $email]);

        if(session('name') != null && session('email')!= null){
            return true;
        }else{
            return false;
        }

    }


}
