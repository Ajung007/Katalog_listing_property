<?php

namespace App\Http\Controllers;

use App\Models\HousePackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){

        $most_header = HousePackage::with(['galleries'])->orderBy('created_at', 'DESC')->get();
        $semarang = HousePackage::with(['galleries'])->where('cities','Semarang')->orderBy('created_at', 'DESC')->limit(4)->get();
        $yogyakarta = HousePackage::with(['galleries'])->where('cities','Yogyakarta')->orderBy('created_at', 'DESC')->limit(4)->get();
        $solo = HousePackage::with(['galleries'])->where('cities','Solo')->orderBy('created_at', 'DESC')->limit(4)->get();
        $tegal = HousePackage::with(['galleries'])->where('cities','Tegal')->orderBy('created_at', 'DESC')->limit(4)->get();
        $purwokerto = HousePackage::with(['galleries'])->where('cities','Purwokerto')->orderBy('created_at', 'DESC')->limit(4)->get();
        $kudus = HousePackage::with(['galleries'])->where('cities','Kudus')->orderBy('created_at', 'DESC')->limit(4)->get();
        $magelang = HousePackage::with(['galleries'])->where('cities','Magelang')->orderBy('created_at', 'DESC')->limit(4)->get();
        return view('pages.home',[
            'house' => HousePackage::count(),
            'most_header' => $most_header,
            'semarang' => $semarang,
            'yogyakarta' => $yogyakarta,
            'solo' => $solo,
            'tegal' => $tegal,
            'purwokerto' => $purwokerto,
            'kudus' => $kudus,
            'magelang' => $magelang
        ]);
    }

    public function browse(Request $request){

        $browse = HousePackage::with(['galleries'])->orderBy('created_at', 'DESC')->paginate(12);
        return view('pages.browse',[
            'browse' => $browse
        ]);
    }

    public function cities(Request $request, $cities){
        $browse = HousePackage::with(['galleries'])->where('cities', $cities)->orderBy('created_at', 'DESC')->paginate(8);
        return view('pages.browse',[
            'browse' => $browse
        ]);
    }
    
    public function search(Request $request){
        $cari = $request->search;
        $browse = HousePackage::with(['galleries'])->where('title', 'like', "%" . $cari . "%")->orderBy('created_at', 'DESC')->paginate();
        return view('pages.browse',[
            'browse' => $browse
        ]);
    }
    
    public function contact(Request $request){
        return view('pages.contact');
    }
}
