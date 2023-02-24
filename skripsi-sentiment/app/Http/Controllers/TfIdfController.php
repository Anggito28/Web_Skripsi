<?php

namespace App\Http\Controllers;

use App\Models\tf_idf;
use App\Http\Requests\Storetf_idfRequest;
use App\Http\Requests\Updatetf_idfRequest;

class TfIdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tf_idf = tf_idf::all();

        return view('/tf_idf', compact(['tf_idf']));
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
     * @param  \App\Http\Requests\Storetf_idfRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetf_idfRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tf_idf  $tf_idf
     * @return \Illuminate\Http\Response
     */
    public function show(tf_idf $tf_idf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tf_idf  $tf_idf
     * @return \Illuminate\Http\Response
     */
    public function edit(tf_idf $tf_idf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetf_idfRequest  $request
     * @param  \App\Models\tf_idf  $tf_idf
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetf_idfRequest $request, tf_idf $tf_idf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tf_idf  $tf_idf
     * @return \Illuminate\Http\Response
     */
    public function destroy(tf_idf $tf_idf)
    {
        //
    }
}
