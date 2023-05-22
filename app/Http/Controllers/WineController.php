<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use App\Models\Winery;
use Illuminate\Http\Request;

class WineController extends Controller
{
    public function index() {

        // dd(request('search'));
        if (request('search')) {
            $wines = Wine::where('name', 'like', '%' . request('search') . '%')->get();
        } else {
            $wines = Wine::all();
        }


        return view('vini')->with('wines', $wines);

    }

    public function extra() {

        $wines = Wine::all();

        $index = request('index');

        return view('viniExtra', compact('wines', 'index'));

    }
}
