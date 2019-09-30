<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bevanda;

class MyController extends Controller
{
    public function getDrink() {

      $bevande = bevanda::all();
      $max_price =$bevande->max('prezzo');
      $min_price = $bevande->min('prezzo');
      $avg_price = $bevande->avg('prezzo');
      $avg_price_rounded = Round($avg_price, 2);
      $drinkNames = [];
      foreach ($bevande as $bevanda) {
        $drinkNames[] = $bevanda -> nome;
      }
      // dd($bevande);

      return view('drink', compact('drinkNames',
                                   'max_price',
                                   'min_price',
                                   'sum_price',
                                   'avg_price_rounded'));
    }
}
