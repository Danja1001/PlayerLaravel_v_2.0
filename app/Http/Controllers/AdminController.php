<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ImageInt;
use App\Songs;
use App\Countries;
use App\Categories;
use App\User;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Country = Countries::select('Country')->get();
        $Category = Categories::select('Category')->get();
        $Country = $Country->unique('Country');
        return view('admin.home',compact('Country','Category'));
    }



    public function upload(Request $request)
    {
        $data = $request->all();


        $file = $request->file('song');
        $filename = $file->getClientOriginalName();
        $file->move('songs',$filename);

        if($request->isMethod('post')){
            if($request->hasFile('image')) {
                $fileImage = $request->file('image');
                $filenameImage = $fileImage->getClientOriginalName();
                $fileImage->move(public_path() . '/images',$filenameImage);
            }
        }


        $songs = new Songs;
        $data['song'] = $filename;
        $data['image'] = $filenameImage;
        $songs->fill($data);
        $songs->save();
        return back()->with('status','Песня добавлена!');
    }


    public function ListSongs() {
        $Songs = Songs::select('Id','name','artist','category','country','song')->get();
        $CountSongs = $Songs->count();
        if(!isset($Songs))
            return Error;
        return view('admin.songs',compact('Songs','CountSongs'));
    }


    public function DelSong($Id) {
        $song=Songs::where('Id',$Id)->first();
        $song->delete();

        return back()->with('status','Товар удален!');
    }


    public function ListCountries() {
        $Countries = Countries::select('Id','Country','Continent')->get();
        $CountCountries = $Countries->count();
        if(!isset($Countries))
            return "Error";
        return view('admin.countries',compact('Countries','CountCountries'));
    }


    public function AddCountry() {
        return view('admin.addcountry');
    }


    public function AddCategory() {
        return view('admin.addcategory');
    }


    public function EditCat($id) {
        $Category = Categories::where('id',$id)->get();
        if($Category->count() == 1)
            return view('admin.editcat',compact('Category'));
        else
            return view('admin.editcat')->with('status','ERROR');
    }


    public function UpdateCat(Request $request) {
        $data = $request->all();
        $Category = Categories::find($data['id']);
        $Category->Category = $data['Category'];
        $Category->save();
        return back()->with('status','Updated success');
    }


    public function StoreCategory(Request $request) {
        $data = $request->validate([
            'Category'=>'required|max:255',
        ]);


        $Category = new Categories;
        $Category->fill($data);
        $Category->save();
        return back()->with('status','Категория добавлена!');
    }

    public function ListCat() {
        $Categories = Categories::select('id','Category')->get();
        $CountCat = $Categories->count();
        if(!isset($Categories))
            return "Error!";
        return view('admin.listcat',compact('Categories','CountCat'));
    }


    public function StoreCountry(Request $request) {
        $data = $request->validate([
            'Country'=>'required|max:255',
            'Continent'=>'required|max:255',
            'Class'=>'required',
        ]);

        $Country = new Countries;
        $Country->fill($data);
        $Country->save();
        return back()->with('status','Город добавлен!');
    }


    public function AddModerator() {
        return view('admin.register');
    }


    public function StoreModerator(Request $request) {

        $data = $request->all();
        if($data['password'] != $data['password_confirmation'])
            return back()->with('status','Пароли не совпадают!');
        $moder = new User;
        $data['password'] = bcrypt($data['password']);
        $moder->fill($data);
        $moder->save();
        return back()->with('status','Модератор добавлен!');
    }


    public function ListModers() {
        $moders = User::select('id','name','email','password')->get();
        if(!isset($moders))
            return back()->with('status','Модераторов нет!');
        $CountModers = $moders->count();
        return view('admin.moders',compact('moders','CountModers'));
    }


    public function EditCountry($Id) {
        $Country = Countries::where('Id',$Id)->get();
        if($Country->count() == 1 )
            return view('admin.editcountry',compact('Country'));
        else
            return view('admin.editcountry')->with('status','ERRRRORRR');

    }


    public function UpdateCountry(Request $request) {
       $Countries = Countries::where('Id',$request->get('Id'))->first();
       $Countries->Country = $request->get('Country');
       $Countries->Continent = $request->get('Continent');
       $Countries->Class = $request->get('Class');
       $Countries->save();
       return back()->with('status','Updated success');

    }


    public function EditSong($Id) {
        $Songs = Songs::where('Id',$Id)->get();
        $Categories = Categories::select('Category')->get();
        $Countries = Countries::select('Country')->get();
        if(!isset($Songs) && !isset($Categories) && !isset($Countries))
            return "Error";
        if($Songs->count() == 1)
            return view('admin.editsong',compact('Songs','Categories','Countries'));
        else
            return "Error";
    }


    public function UpdateSong(Request $request) {
        $Song = Songs::find($request->get('Id'));
        $Song->name = $request->get('name');
        $Song->artist = $request->get('artist');
        $Song->category = $request->get('category');
        $Song->country = $request->get('country');
        $Song->save();
        $Song->save = true or false;
        if($Song == true)
            return back()->with('status','Track - '.$Song->name.' - Updated success!');
    }



}
