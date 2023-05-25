<?php

namespace App\Http\Controllers;

use App\Models\Winery;
use Illuminate\Http\Request;

class WineryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // dd(request('search'));
        // if (request('search')) {
        //     $wineries = Winery::where('name', 'like', '%' . request('search') . '%')->get();
        // } else {
        //     $wineries = Winery::all();
        // }

        if (request('search')) {
            $wineries = Winery::where('name', 'like', '%' . request('search') . '%')
                                ->orWhere('address', 'like', '%' . request('search') . '%')
                                ->orWhere('town', 'like', '%' . request('search') . '%')
                                ->orWhere('district', 'like', '%' . request('search') . '%')
                                ->orWhere('region', 'like', '%' . request('search') . '%')
                                ->orWhere('nation', 'like', '%' . request('search') . '%')
                                ->orWhere('phone_number', 'like', '%' . request('search') . '%')
                                ->orWhere('mail', 'like', '%' . request('search') . '%')
                                ->get();
        } else {
            $wineries = Winery::all();
        }

        return view('guest.wineries.index')->with('wineries', $wineries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Winery $winery)
    {

        return view('guest.wineries.show', compact('winery'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Winery $winery)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Winery $winery)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Winery $winery)
    {

    }
}
