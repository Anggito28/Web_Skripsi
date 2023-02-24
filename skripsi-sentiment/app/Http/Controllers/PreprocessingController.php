<?php

namespace App\Http\Controllers;

use App\Models\preprocessing;
use App\Http\Requests\StorepreprocessingRequest;
use App\Http\Requests\UpdatepreprocessingRequest;

class PreprocessingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preprocessing = preprocessing::all();

        return view('preprocessing.index', compact(['preprocessing']));
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
     * @param  \App\Http\Requests\StorepreprocessingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepreprocessingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\preprocessing  $preprocessing
     * @return \Illuminate\Http\Response
     */
    public function show(preprocessing $preprocessing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\preprocessing  $preprocessing
     * @return \Illuminate\Http\Response
     */
    public function edit(preprocessing $preprocessing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepreprocessingRequest  $request
     * @param  \App\Models\preprocessing  $preprocessing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepreprocessingRequest $request, preprocessing $preprocessing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\preprocessing  $preprocessing
     * @return \Illuminate\Http\Response
     */
    public function destroy(preprocessing $preprocessing)
    {
        //
    }
}
