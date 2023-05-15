<?php

namespace App\Http\Controllers;

use App\Models\Vineyard;
use Illuminate\Http\Request;

class VineyardController extends Controller
{
    public function index() {

        $vineyards = Vineyard::all();

        return view('vitigni', compact('vineyards'));

    }
}
