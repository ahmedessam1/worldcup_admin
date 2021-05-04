<?php

namespace App\Http\Controllers\Dashboard;

use App\AboutUs;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $about = AboutUs::all();
        if($about->isEmpty()){
            AboutUs::create([
                'text'          =>  '',
                'text_ar'       =>  ''
            ]);
            $about = AboutUs::all();
        }
        return view('dashboard.pages.about-us.index')->withAbout($about[0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $about = AboutUs::find($id);
        return view('dashboard.pages.about-us.edit')->withAbout($about);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $about = AboutUs::find($id);

        $about->update([
            'text'          =>  $request->text,
            'text_ar'       =>  $request->text_ar
        ]);

        return redirect()->route('about-us.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {

    }
}
