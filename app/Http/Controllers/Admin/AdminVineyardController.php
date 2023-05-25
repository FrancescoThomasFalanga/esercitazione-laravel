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
        $vineyards = Vineyard::all();

        return view('admin.vineyards.index', compact('vineyards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vineyards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);

        $form_data = $request->all();

        $vineyard = new Vineyard();

        $vineyard->fill($form_data);

        $vineyard->save();

        return redirect()->route('admin.vineyards.show', $vineyard);
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
        return view('admin.vineyards.edit', compact('vineyard'));
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
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);

        $form_data = $request->all();

        $vineyard->update($form_data);

        $vineyard->save();

        return redirect()->route('admin.vineyards.show', $vineyard);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Winery $winery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vineyard $vineyard)
    {
        $vineyard->delete();

        return redirect()->route('admin.vineyards.index');
    }
}
