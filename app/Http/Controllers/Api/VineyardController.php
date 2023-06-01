<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vineyard;
use Illuminate\Http\Request;

class VineyardController extends Controller
{
    public function index(){
        $vineyards = Vineyard::with('wines')->get();

        return response()->json([
          'success' => true,
          'results' => $vineyards,
        ]);
    }

    public function show($id){
      $vineyard = Vineyard::where('id', $id)->with('wines')->first();

      if($vineyard){
        return response()->json([
          'success' => true,
          'vineyard' => $vineyard,
        ]);
      } else {
        return response()->json([
          'success' => false,
          'error' => 'Il vitigno selezionato non esiste',
        ]);
      }
    }
}
