<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\moders;
use App\Countries;
use App\Songs;
use App\Categories;

class ModerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $Country = Countries::select('Country')->get();
        $Category = Categories::select('Category')->get();
        $Country = $Country->unique('Country');
        return view('moderator.index',compact('Country','Category'));
    }

    public function upload(Request $request)
    {
        $data = $request->all();
        $file = $request->file('song');
        $filename = $file->getClientOriginalName();
        $file->move('songs',$filename);

        $songs = new Songs;
        $data['song'] = $filename;
        $songs->fill($data);
        $songs->save();
        return back()->with('status','Песня добавлена!');
    }
}
