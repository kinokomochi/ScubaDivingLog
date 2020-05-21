<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class MypageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    // public function getUser($id)
    // {
    //     $profile = new User();
    //     $profile = Auth::user()->find($id);
    //     return view('mypage.mypage', ['profile' => $profile, 'id' => $id]);
    // }

    // public function editImage(UserRequest $request)
    // {
    //     $image = $request->image->store('public/images');
    //     return view('mypage.editImage.{id}', ['image' => $image, 'id' => $id]);
    // }
}
