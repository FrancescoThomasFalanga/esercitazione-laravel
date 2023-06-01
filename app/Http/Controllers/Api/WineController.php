<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
    public function index(){
        // $wines = Wine::all();
        $wines = Wine::with('winery', 'vineyards')->get();

        return response()->json([
          'success' => true,
          'results' => $wines,
        ]);
    }

    public function show($id){
      $wine = Wine::where('id', $id)->with('winery', 'vineyards')->first();

      if($wine){
        return response()->json([
          'success' => true,
          'wine' => $wine,
        ]);
      } else {
        return response()->json([
          'success' => false,
          'error' => 'Il vino selezionato non esiste',
        ]);
      }
    }
}
