<?php

namespace App\Http\Controllers;

use App\Models\Winery;
use Illuminate\Http\Request;

class WineryController extends Controller
{
    public function index() {

        $wineries = Winery::all();

        return view('cantine', compact('wineries'));

    }
}
