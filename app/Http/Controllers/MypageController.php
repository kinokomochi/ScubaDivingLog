<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\User;

use App\Diary;

use Auth;

class MypageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['mypage', 'indexUser']);
    }

    public function mypage($id)
    {
        $user = User::find($id);
        if($user == null) {
            abort('403');
        }
        $diary = Diary::where('user_id', $user->id)->simplepaginate(6);
        return view('mypage.mypage', ['diary' => $diary, 'user' => $user]);
    }
    public function editImage()
    {
        //編集画面を表示する
        return view('mypage.editImage');
    }
    
    public function updateImage(Request $request)
    {        
        //バリデーションチェックを行う
        $validateData = $request->validate([
            'image' => 'required|image|mimes:JPEG,jpeg,JPG,jpg,PNG,png'
        ]);
        //エラーがあれば選択画面にリダイレクト
        //エラーがなければ画像をDBに保存
        $user = Auth::user();
        $user->image = basename($request->image->store('public/images'));
        $user->save();
        //マイページへ
        return redirect('mypage');
    }

    public function editProfile()
    {
        return view('mypage.editProfile');
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
        Auth::user()->name = $request->name;
        Auth::user()->gender = $request->gender;
        Auth::user()->prefecture = $request->prefecture;
        Auth::user()->licence = $request->licence;
        Auth::user()->experience = $request->experience;
        Auth::user()->introduction = $request->introduction;
        Auth::user()->save();
        //mypageに移動
        return redirect('mypage');
    }
}
