<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\user;

use Auth;

class UserController extends Controller
{
    //
    public function indexUser()
    {
        //ユーザーデータ全取得
        $user = DB::table('users')->paginate(10);
        //viewに渡す
        return view('user.indexUser', ['user' => $user]);
    }


    public function deleteUser()
    {
        return view('user.deleteUser');
    }

    public function destroyUser()
    {

        $user = Auth::user();
        $user->delete();

        return redirect('/');
    }

}
