<?php

namespace App\Http\Controllers\Dashboard;

use App\Slider;
use App\Traits\FileTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    use FileTrait;
    public function index()
    {
        $slider = Slider::all();
        return view('dashboard.pages.slider')->withSlider($slider);
    }

    public function update(Request $request)
    {
        $image = $this->fileUploadHelper($request->image, "uploads");
        $upload = Slider::find($request->id);
        $upload->image = $image;
        $upload->save();
        return redirect()->back();
    }
}
