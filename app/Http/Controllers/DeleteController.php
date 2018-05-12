<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Songs;
use App\Countries;
use App\User;

class DeleteController extends Controller
{
    public function DelCat($id) {
        $Category = Categories::where('id',$id);
        $Category->delete();
        return back()->with('status','Категория удалена!');
    }


    public function DelSong($Id) {
        $Song = Songs::where('Id',$Id);
        $Song->delete();
        return back()->with('status','Песня удалена!');
    }


    public function DelCountry($Id) {
        $Country = Countries::where('Id',$Id);
        $Country->delete();
        return back()->with('status','Страна удалена!');

    }


    public function DelModer($id) {
        $moder = User::where('id',$id);
        $moder->delete();
        return back()->with('status','Модер удален!');
    }
}
