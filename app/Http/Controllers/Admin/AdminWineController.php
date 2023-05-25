<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        return view('admin.wines.index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wineries = Winery::all();
        return view('admin.wines.create', compact('wineries'));
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
        return view('admin.wines.edit', compact('wine'));
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
            'winery' => 'required',
            'color' => 'required',
            'type' => 'required',
            'gradation' => 'required',
            'extract' => 'required',
            'acidity' => 'required',
        ]);

        $form_data = $request->all();

        $wine->update($form_data);

        $wine->save();

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
