<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\Validator;

use Illuminate\Support\Facades\DB;

use App\Diary;

use App\User;

use Auth;

class DiaryController extends Controller
{
    public function indexDiary()
    {
        //日記の全てのデータ取得
        $diary = DB::table('diaries')->paginate(10);
        //viewに渡す
        return view('diary.indexDiary', ['diary' => $diary]);
    }

    public function createDiary()
    {
        return view('diary.createDiary');
    }

    public function createDiaryImg(Request $request)
    {
        //バリデーションチェック
        $validateData = $request->validate([
            'day' => 'required|date',
            'title' => 'required|max:255|min:1',
            'content' => 'required|max:255|min:1'
        ]);
        //エラーあれば戻る
        //なければ写真登録画面に移動
        return view('diary.createDiaryImg', ['validateData' => $validateData]);
    }

    public function storeDiary(Request $request)
    {
        //画像のバリデーションチェック
        $validateImg = $request->validate([
            'photo1' => 'nullable|image|mimes:JPEG,jpeg,JPG,jpg,PNG,png',
            'photo2' => 'nullable|image|mimes:JPEG,jpeg,JPG,jpg,PNG,png',
            'photo3' => 'nullable|image|mimes:JPEG,jpeg,JPG,jpg,PNG,png',
            'movie' => 'nullable'
        ]);
        if(isset($error) > 0){
            return redirect('diary/createDiaryImg');
        }
        //エラーなければ値をDBに保存
        $diary = new Diary();
        $diary->id = $request->id;
        $diary->day = $request->day;
        $diary->title = $request->title;
        $diary->content = $request->content;
        if(isset($request->photo1)){
        $diary->photo1 =  basename($request->photo1->store('public/images'));
        }
        if(isset($request->photo2)){
        $diary->photo2 =  basename($request->photo2->store('public/images'));
        }
        if(isset($request->photo3)){
        $diary->photo3 =  basename($request->photo3->store('public/images'));
        }
        $diary->user_id = Auth::user()->id;
        $diary->save();

        //リダイレクト
        return redirect(route('showDiary', [
            'id' => $diary->id
        ]));
    }

    public function showDiary($id)
    {
        $diary = Diary::find($id);
        if($diary == null) {
            abort('403');
        }
        $user = DB::table('users')->join('diaries', 'user_id', '=', 'users.id')->select()->where('users.id', '=', $diary['user_id'])->first();
        return view('diary.showDiary',['diary' => $diary, 'user' => $user]);
    }

    public function editDiary($id)
    {
        $diary = Diary::find($id);
        $user = DB::table('users')->join('diaries', 'user_id', '=', 'users.id')->select()->where('users.id', '=', $diary['user_id'])->first();
        return view('diary.editDiary', ['diary' => $diary, 'user' => $user]);
    }

    public function updateDiary($id, Request $request)
    {
        $validateData = $request->validate([
            'day' => 'required|date',
            'title' => 'required|max:255|min:1',
            'content' => 'required|max:255|min:1'
        ]);
        $diary = Diary::find($id);
        $diary->id = $request->id;
        $diary->day = $request->day;
        $diary->title = $request->title;
        $diary->content = $request->content;
        $diary->save();
        return redirect(route('showDiary', [
            'id' => $diary->id
        ]));
    }

    public function deleteDiary($id)
    {
        $diary = Diary::find($id);
        $user = DB::table('users')->join('diaries', 'user_id', '=', 'users.id')->select()->where('users.id', '=', $diary['user_id'])->first();
        return view('diary.deleteDiary',['diary' => $diary, 'user' => $user]);
    }
    
    public function destroyDiary($id, Request $request)
    {
        Diary::find($id)->delete();
        return redirect('mypage');
    }

    public function editDiaryImg($id)
    {
        $diary = Diary::find($id);
        $user = DB::table('users')->join('diaries', 'user_id', '=', 'users.id')->select()->where('users.id', '=', $diary['user_id'])->first();
        return view('diary.editDiaryImg', ['diary' => $diary, 'user' => $user]);
    }

    public function updateDiaryImg($id, Request $request)
    {
        $validateImg = $request->validate([
            'photo1' => 'nullable|image|mimes:JPEG,jpeg,JPG,jpg,PNG,png',
            'photo2' => 'nullable|image|mimes:JPEG,jpeg,JPG,jpg,PNG,png',
            'photo3' => 'nullable|image|mimes:JPEG,jpeg,JPG,jpg,PNG,png',
        ]);
        $diary = Diary::find($id);
        $diary->id = $request->id;
        $diary->day = $request->day;
        $diary->title = $request->title;
        $diary->content = $request->content;
        if(isset($request->photo1)){
            $diary->photo1 =  basename($request->photo1->store('public/images'));
        }
        if(isset($request->photo2)){
            $diary->photo2 =  basename($request->photo2->store('public/images'));
        }
        if(isset($request->photo3)){
            $diary->photo3 =  basename($request->photo3->store('public/images'));
        }
        $diary->save();
        return redirect(route('showDiary', [
            'id' => $diary->id
        ]));
    }

    

}
