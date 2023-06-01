<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Winery;
use Illuminate\Http\Request;

class WineryController extends Controller
{
    public function index(){
        // $wines = Wine::all();
        $wineries = Winery::with('wines')->get();

        return response()->json([
          'success' => true,
          'results' => $wineries,
        ]);
    }

    public function show($id){
      $winery = Winery::where('id', $id)->with('wines')->first();

      if($winery){
        return response()->json([
          'success' => true,
          'winery' => $winery,
        ]);
      } else {
        return response()->json([
          'success' => false,
          'error' => 'Il vino selezionato non esiste',
        ]);
      }
    }
}
