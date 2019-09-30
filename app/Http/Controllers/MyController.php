<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bevanda;

class MyController extends Controller
{
    public function getDrink() {

      $bevande = bevanda::all();
      dd($bevande);

      return view('drink');
    }
}
