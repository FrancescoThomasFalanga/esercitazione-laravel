<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Winery;
use Illuminate\Http\Request;

class AdminWineryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wineries = Winery::all();

        return view('admin.wineries.index', compact('wineries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wineries.create');
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
            'address' => 'required',
            'town' => 'required',
            'district' => 'required',
            'region' => 'required',
            'nation' => 'required',
            'phone_number' => 'required',
            'mail' => 'required|email',
        ]);

        $form_data = $request->all();

        $winery = new Winery();

        $winery->fill($form_data);

        $winery->save();

        return redirect()->route('admin.wineries.show', $winery);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Winery $winery)
    {
        return view('admin.wineries.show', compact('winery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Winery $winery)
    {
        return view('admin.wineries.edit', compact('winery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Winery $winery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Winery $winery)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'town' => 'required',
            'district' => 'required',
            'region' => 'required',
            'nation' => 'required',
            'phone_number' => 'required',
            'mail' => 'required|email',
        ]);

        $form_data = $request->all();

        $winery->update($form_data);

        $winery->save();

        return redirect()->route('admin.wineries.show', $winery);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Winery $winery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Winery $winery)
    {
        $winery->delete();

        return redirect()->route('admin.wineries.index');
    }
}
