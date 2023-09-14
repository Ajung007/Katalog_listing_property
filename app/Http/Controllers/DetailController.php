<?php

namespace App\Http\Controllers;

use App\Models\HousePackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug){

        $item = HousePackage::with(['galleries'])->where('slug', $slug)->firstOrFail();
        $random = HousePackage::with(['galleries'])->orderByRaw('RAND()')->take(4)->get();
        return view('pages.detail', [
            'item' => $item,
            'random' => $random
        ]);
    }
}
