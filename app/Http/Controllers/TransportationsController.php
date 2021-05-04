<?php

namespace App\Http\Controllers;

use App\Transportation;
use App\User;
use Illuminate\Http\Request;
use Session;

class TransportationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Transportation::with('player')->get();
        return view('dashboard.pages.transportations.index')->withModel($model);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = User::where('role', 'player')->orderBy('name', 'ASC')->get();
        return view('dashboard.pages.transportations.create')->withModel($model);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Transportation();
        $model->player_id = $request->player_id;
        $model->from_location = $request->from_location;
        $model->to_location = $request->to_location;
        $model->from_description= $request->from_description;
        $model->to_description = $request->to_description;
        $model->from_time = $request->from_time;
        $model->to_time = $request->to_time;
        $model->date = $request->date;
        $model->save();
        Session::flash('success', 'Player transportation added successfully.');
        return redirect()->route('transportations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $model = new Transportation();
        $model->player_id = $request->player_id;
        $model->from_location = $request->from_location;
        $model->to_location = $request->to_location;
        $model->from_description= $request->from_description;
        $model->to_description = $request->to_description;
        $model->from_time = $request->from_time;
        $model->to_time = $request->to_time;
        $model->date = $request->date;
        $model->save();
        return redirect()->route('transportations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transportation::find($id)->delete();
        return back();
    }
}
