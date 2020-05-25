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
    // }
    public function editImage($id)
    {
        //編集画面を表示する
        return view('mypage.editImage', ['id' => $id] );
    }
    
    public function updateImage(Request $request)
    {        
        //バリデーションチェックを行う
        $validateData = $request->validate([
            'image' => 'required|image|mimes:JPEG,jpeg,JPG,jpg,PNG,png'
        ]);
        //エラーがあれば選択画面にリダイレクト
        //エラーがなければ画像をDBに保存
        $id = $request->id;
        $user = User::where('id', Auth::user()->id)->find($request->id);
        $user->image = $request->image->store('public/images');
        $image = $user->image;
        $read_image = str_replace('public/', '/storage/',$image);
        $user->save();
        //マイページへ
        return view('mypage.mypage', ['id' => $id, 'image' => $image, 'read_image' => $read_image]);
    }

    public function editProfile($id, User $user)
    {
        $user = User::find($id);

        return view('mypage.editProfile', ['id' => $id, 'user' => $user]);
    }

    public function updateProfile(Request $request)
    {
        //バリデーションチェック
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'gender' => 'required',
            'licence' => 'required',
            'experience' => 'required',
            'prefecture' => 'required',
            'introduction' => 'required'
        ]);
        //エラーあればeditProfile/idにリダイレクト
        //なければDBに登録
        $id = $request->id;
        $user = User::where('id', Auth::user()->id)->find($request->id);
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->prefecture = $request->prefecture;
        $user->licence = $request->licence;
        $user->experience = $request->experience;
        $user->introduction = $request->introduction;
        $user->save();
        Auth::user()->name = $request->name;
        Auth::user()->gender = $request->gender;
        Auth::user()->prefecture = $request->prefecture;
        Auth::user()->licence = $request->licence;
        Auth::user()->experience = $request->experience;
        Auth::user()->introduction = $request->introduction;
        //mypageに移動
        return view('mypage.mypage', ['id' => $id, 'user' => $user]);
    }
}
