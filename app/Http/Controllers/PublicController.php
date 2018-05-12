<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Countries;
use App\Songs;

class PublicController extends Controller
{
    protected $Id;
    protected $Country;
    protected $Class;
    protected $Continent;

    public function getIndex() {
        $Categories = Songs::select('category')->get();
        $Categories = $Categories->unique('category');
        if(!isset($Categories))
            return Error;
        $songs = Songs::select('Id','artist','name','song','image','category','country')->get();
        if (!isset($songs))
            return "Error";
        
        return view('public.index',compact('Categories','songs'));
    }


    public function SearchTrack(Request $request) {
        $Categories = Songs::select('category')->get();
        $Categories = $Categories->unique('category');
        $result = Songs::where('name','LIKE','%'.$request->name.'%')->orWhere('artist','LIKE','%'.$request->name.'%')->orWhere('category','LIKE','%'.$request->name.'%')->get();
        $countSongs = $result->count();
        return view('public.search',compact('result','Categories','countSongs'));
    }


    public function SearchCountry(Request $request) {
        $Categories = Songs::select('category')->get();
        $Categories = $Categories->unique('category');
        $result = Songs::where('country','LIKE','%'.$request->name.'%')->get();
        $countSongs = $result->count();
        return view('public.search',compact('result','Categories','countSongs'));
    }


    public function ShowCountries() {
        $Countries = Countries::select('Id','Country','Class','Continent')->get();
        if($Countries->count()<0)
            return back()->withErrors(['Not much countries!']);
        $ListContinents = Countries::select('Continent')->get();
        if($ListContinents->count()<0)
            return back()->withErrors(['Not much continents!']);
        $ListContinents = $ListContinents->unique('Continent');
        $Categories = Songs::select('category')->get();
        if($Categories->count()<0)
            return back()->withErrors(['Not much categories']);
        $Categories = $Categories->unique('category');
        $Cont = $Countries->unique('Continent');
        return view('public.countries',compact('Countries','Cont','Categories','ListContinents'));
    }


    public function PlayCountry($Country) {
        $Categories = Songs::select('category')->get();
        $Categories = $Categories->unique('category');
        if(!isset($Categories))
            return Error;
        $TrackList = Songs::select('Id','name','song','image')->where('Country',$Country)->get();
        if(!isset($TrackList))
            return "Error";
        return view('public.playcountry',compact('Categories','TrackList','Country'));
    }


    public function ShowByContinent($continent) {
        $Continents = Countries::select('Country','Class')->where('Continent',$continent)->get();
        $ListContinents = Countries::select('Continent')->get();
        $ListContinents = $ListContinents->unique('Continent');
        $Categories = Songs::select('category')->get();
        $Categories = $Categories->unique('category');
        if(!isset($Continents) && !isset($Categories))
            return Error;
        return view('public.sortcontinent',compact('Continents','Categories','continent','ListContinents'));

    }


    public function PlayCat($category) {
        $songs = Songs::select('Id','artist','name','song','category','country')->get();

        $Categories = Songs::select('category')->get();
        $Categories = $Categories->unique('category');
        if(!isset($Categories))
            return Error;
        $TrackList = Songs::select('Id','name','song','image')->where('category',$category)->get();
        if(!isset($TrackList))
            return "Error";
        return view('public.playcat',compact('Categories','TrackList','category'));
    }



    public function showPlayer() {
        return view('public.showplayer');
    }




}
