<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;

use Auth;

class UserController extends Controller
{
    //

    public function deleteUser()
    {
        return view('mypage.deleteUser');
    }

    public function destroyUser()
    {

        $user = Auth::user();
        $user->delete();

        return redirect('/');
    }

}
