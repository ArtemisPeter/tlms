<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function registerPost(Request $request){
        $request -> validate([
            'employee_id' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'password' => 'required',
        ]);

        $teacherData = [
            'employee_id' => $request->teacherId,
            'fname' => $request->fname,
            'lname' => $request->lname,
        ];

        $teacher = Teacher::create($teacherData);

        $accountData = [
            'fname' => $request->fname,
            'password' => $request->password,
        ];

        $account = Account::class($accountData);

        if(!$account){
            return redirect(route('register'))->with('Error', 'There is an error');
        }else{
            return redirect(route('register'))->with('Success', 'yes!');
        }
    }

}
