<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function index(){
        return Tema::all();
      }
}
