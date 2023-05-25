<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
    public function index() {

        // if (request('search')) {
        //     $wines = Wine::where('name', 'like', '%' . request('search') . '%')->get();
        // } else {
        //     $wines = Wine::all();
        // }

        if (request('search')) {
            $wines = Wine::where('name', 'like', '%' . request('search') . '%')
                          ->orWhere('year', 'like', '%' . request('search') . '%')
                          ->orWhere('type', 'like', '%' . request('search') . '%')
                          ->orWhere('gradation', 'like', '%' . request('search') . '%')
                          ->orWhere('acidity', 'like', '%' . request('search') . '%')
                          ->get();
        } else {
            $wines = Wine::all();
        }


        return view('guest/wine/index')->with('wines', $wines);

    }

    public function show(Wine $wine)
    {
        return view('guest.wine.show', compact('wine'));
    }



    // public function extra() {

    //     $wines = Wine::all();

    //     $index = request('index');

    //     return view('viniExtra', compact('wines', 'index'));

    // }
}
