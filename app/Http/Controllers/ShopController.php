<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Shop;

use App\Diary;

class ShopController extends Controller
{
    //
    public function showShop($id)
    {
        $shop = Shop::find($id);
        return view('shop.showShop', ['shop' => $shop]);
    }

    public function searchShop(Request $request)
    {
        //$request->input()で検索時に入力した項目を取得
        $shopname = $request->input('shopname');
        $address = $request->input('address');
        //入力フォームで入力した文字列を含むカラムを取得
        $shops = Shop::query()
        ->when($request->has('shopname'), function($query) use ($shopname){
            $query->where('shopname', 'like', '%' . $shopname . '%');
        })
        ->when($request->has('address'), function($query) use ($address){
            $query->where('address', 'like', '%' . $address . '%');
        })
        ->paginate(5);
        return view('shop.searchShop', compact('shops'));
    }
}
