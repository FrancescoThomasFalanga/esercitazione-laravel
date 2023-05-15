<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use App\Models\Winery;
use Illuminate\Http\Request;

class WineController extends Controller
{
    public function index() {

        $wines = Wine::all();

        return view('vini', compact('wines'));

    }

    public function extra() {

        $wines = Wine::all();

        $index = request('index');

        return view('viniExtra', compact('wines', 'index'));

    }
}
