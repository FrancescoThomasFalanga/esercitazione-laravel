<?php

namespace App\Http\Controllers;

use App\Models\Vineyard;
use Illuminate\Http\Request;

class VineyardController extends Controller
{
    public function index() {

        $vineyards = Vineyard::all();
        
        // if (request('search')) {
        //     $vineyards = Vineyard::where('name', 'like', '%' . request('search') . '%')->get();
        // } else {
        //     $vineyards = Vineyard::all();
        // }

        if (request('search')) {
            $vineyards = Vineyard::where('name', 'like', '%' . request('search') . '%')
                          ->orWhere('desc', 'like', '%' . request('search') . '%')
                          ->get();
        } else {
            $vineyards = Vineyard::all();
        }

        return view('guest.vineyards.index', compact('vineyards'));

    }

    public function show(Vineyard $vineyard){
        return view('guest.vineyards.show', compact('vineyard'));
    }
}
