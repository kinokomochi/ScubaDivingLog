<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Validation\Validator;

use App\ToDoList;

use Auth;

class ToDoListController extends Controller
{
    //
    public function indexList()
    {
        $id = Auth::user()->id;
        $list = ToDoList::where('user_id', '=', $id)->get();
        return view('list.indexList', ['list' => $list]);
    }

    public function createList()
    {
        return view('list.postList');
    }

    public function postList(Request $request)
    {

        $validateData = $request->validate([
            'list' => 'required|max:255',
        ]);
    
        $list = new ToDoList();
        $list->list = $request->list;
        $list->user_id = Auth::user()->id;
        $list->save();

        return redirect(route('indexList',[
            'list' => $list,
        ]));
    }

    public function deleteList($id)
    {
        $list = ToDoList::findOrFail($id);
        $list->delete();
        return redirect('list/indexList');
    }
}
