<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function store(LoginRequest $request)
    {
        $request->all();
        $obj = new Account();
        $obj->email = $request->get('email');
        $obj->fullname = $request->get('fullname');
        $obj->username = $request->get('username');
        $hashedPw = bcrypt($request->get('password'));
        $obj->password =$hashedPw;
        $obj->save();
        return view ('dktc');
    }
    public function dangnhap(LoginRequest $request){
        $account = Account::where('username' ,'=',$request->get('name'))->first();
        if ($account != null){
            if (Hash::check($request->get('password'),$account->password)){
                return view('dntc');
            }
            else{
                return view('dntb');
            }
        }
        else{
            return view('dntb');
        }

    }

}
