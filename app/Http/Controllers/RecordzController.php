<?php

namespace App\Http\Controllers;

use App\recordz;
use Illuminate\Http\Request;

class RecordzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, Recordz $recordz)
    {
        $recordz->name = $request->name;
        $recordz->type = $request->type;
        $recordz->serial_no = $request->serial_no;
        $recordz->amount = $request->amount;

        $recordz->save();
        return redirect(route('toys.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\recordz  $recordz
     * @return \Illuminate\Http\Response
     */
    public function show(recordz $recordz)
    {
        $arr['records'] = $recordz::all();
        return view('records')->with($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\recordz  $recordz
     * @return \Illuminate\Http\Response
     */
    public function edit(recordz $recordz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\recordz  $recordz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recordz $recordz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\recordz  $recordz
     * @return \Illuminate\Http\Response
     */
    public function destroy(recordz $recordz)
    {
        //
    }
}
