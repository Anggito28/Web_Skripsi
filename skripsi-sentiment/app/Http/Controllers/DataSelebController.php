<?php

namespace App\Http\Controllers;

use App\Models\data_seleb;
use App\Http\Requests\Storedata_selebRequest;
use App\Http\Requests\Updatedata_selebRequest;

class DataSelebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seleb = data_seleb::all();

        return view('seleb.index', compact(['seleb']));
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
     * @param  \App\Http\Requests\Storedata_selebRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedata_selebRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\data_seleb  $data_seleb
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $readonly = true;
        $seleb = data_seleb::findOrFail($id);
        $data = data_seleb::find($id);
        // @dd($data);
        return view('seleb.show', compact(['seleb', 'readonly', 'data']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\data_seleb  $data_seleb
     * @return \Illuminate\Http\Response
     */
    public function edit(data_seleb $data_seleb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedata_selebRequest  $request
     * @param  \App\Models\data_seleb  $data_seleb
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedata_selebRequest $request, data_seleb $data_seleb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data_seleb  $data_seleb
     * @return \Illuminate\Http\Response
     */
    public function destroy(data_seleb $data_seleb)
    {
        //
    }
}
