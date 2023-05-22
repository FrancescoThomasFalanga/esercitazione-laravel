<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vineyard;
use Illuminate\Http\Request;

class AdminVineyardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vineyard = Vineyard::all();

        return view('admin.vineyard.index', compact('vineyard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vineyard $vineyard)
    {
        return view('admin.vineyards.show', compact('vineyard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vineyard $vineyard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Winery $winery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vineyard $vineyard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Winery $winery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vineyard $vineyard)
    {
        //
    }
}
