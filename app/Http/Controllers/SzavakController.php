<?php

namespace App\Http\Controllers;

use App\Models\Szavak;
use Illuminate\Http\Request;

class SzavakController extends Controller
{
    public function index(){
      return Szavak::all();
    }

    public function szavakTemaval(Request $request){
       $temaId=$request->input('temaId');
       return Szavak::with('tema')->where('temaId', $temaId)->get();
    }
}
