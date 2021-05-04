<?php

namespace App\Http\Controllers\Dashboard;

use App\CategoryNews;
use App\Http\Controllers\Controller;
use App\News;
use App\Traits\FileTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class NewsController extends Controller
{
    use FileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $news = News::all();
        return view('dashboard.pages.news.index')->withNews($news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        return view('dashboard.pages.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        News::create([
            'title'          =>  $request->title,
            'description'   =>  $request->description,
            'image'         =>  $this->fileUploadHelper($request->image, "uploads"),
        ]);

        return redirect()->route('news.index');
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
        $news = News::find($id);
        return view('dashboard.pages.news.edit')->withNews($news);
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
        $news = News::find($id);
        $image = null;

        if($request->image){
            $image = $this->fileUploadHelper($request->image, "uploads");
        }

        $news->update([
            'title'          =>  $request->title,
            'description'   =>  $request->description,
            'image'         =>  isset($image) ?  $image : $news->image,
        ]);

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        News::where('id', $id)->delete();
        return redirect()->route('news.index');
    }
}
