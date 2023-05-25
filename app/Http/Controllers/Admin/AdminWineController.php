<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vineyard;
use App\Models\Wine;
use App\Models\Winery;
use Illuminate\Http\Request;

class AdminWineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wines = Wine::all();
        $vineyards = Vineyard::all();

        return view('admin.wines.index', compact('wines', 'vineyards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wineries = Winery::all();
        $vineyards = Vineyard::all();
        return view('admin.wines.create', compact('wineries', 'vineyards'));
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
            'year' => 'required',
            'winery_id' => 'required',
            'color' => 'required',
            'type' => 'required',
            'gradation' => 'required',
            'extract' => 'required',
            'acidity' => 'required',
        ]);

        $form_data = $request->all();

        $wine = new Wine();

        $wine->fill($form_data);

        $wine->save();

        if(array_key_exists('vineyards', $form_data)){
            $wine->vineyards()->attach($form_data['vineyards']);
        }

        return redirect()->route('admin.wines.show', $wine);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Wine $wine)
    {
        return view('admin.wines.show', compact('wine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Wine $wine)
    {
        $wineries = Winery::all();
        $vineyards = Vineyard::all();
        return view('admin.wines.edit', compact('wine', 'wineries', 'vineyards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Winery $winery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wine $wine)
    {

        $request->validate([
            'name' => 'required',
            'year' => 'required',
            'winery_id' => 'required',
            'color' => 'required',
            'type' => 'required',
            'gradation' => 'required',
            'extract' => 'required',
            'acidity' => 'required',
        ]);

        $form_data = $request->all();

        $wine->update($form_data);

        if(array_key_exists('vineyards', $form_data)){
            $wine->vineyards()->sync($form_data['vineyards']);
        } else{
            $wine->vineyards()->detach();
        }

        // $wine->save();

        return redirect()->route('admin.wines.show', $wine);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Winery $winery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wine $wine)
    {
        $wine->delete();

        return redirect()->route('admin.wines.index');
    }
}
