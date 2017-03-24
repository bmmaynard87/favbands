<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Band;

class BandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        if( ! is_null($id)) {
            return $this->show($id);
        }

        return Band::orderBy('id', 'asc')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $band = new Band;
        $band->name = $request->input('name');
        $band->start_date = $request->input('start_date') && $request->input('start_date') != '0000-00-00' ? date('Y-m-d', strtotime($request->input('start_date'))) : null;
        $band->website = $request->input('website');
        $band->still_active = $request->input('still_active');
        $band->save();

        return "{$band->name} added successfully.";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Band::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request->input('start_date');
        $band = Band::find($id);
        $band->name = $request->input('name');
        $band->start_date = $request->input('start_date') && $request->input('start_date') != '0000-00-00' ? date('Y-m-d', strtotime($request->input('start_date'))) : null;
        $band->website = $request->input('website');
        $band->still_active = $request->input('still_active');
        $band->save();

        return "{$band->name} updated successfully.";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $band = Band::find($id);
        $band_name = $band->name;

        $band->delete();

        return "$band_name deleted successfully.";
    }
}
