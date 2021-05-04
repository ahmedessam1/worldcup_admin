<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\Category;
use App\CategoryNews;
use App\News;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $slider = Slider::all();
        return view('pages.home')->withSlider($slider);
    }

    public function about()
    {
        $about = AboutUs::first();
        return view('pages.about')->withAbout($about);
    }

    public function products($category_id)
    {
        $products = Product::where('category_id', $category_id)->paginate(18);
        $category = Category::find($category_id);
        return view('pages.products')->withProducts($products)->withCategory($category);
    }

    public function productShow($id)
    {
        $product = Product::find($id);
        return view('pages.products_show')->withProduct($product);
    }

    public function news($category_id)
    {
        $news = News::where('category_id', $category_id)->paginate(18);
        $category = CategoryNews::find($category_id);
        return view('pages.news')->withNews($news)->withCategory($category);
    }

    public function newsShow($id)
    {
        $news = News::with('category')->find($id);
        return view('pages.news_show')->withNews($news);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function locale(Request $request)
    {
        $request->session()->put('locale', $request->locale);
        return back();
    }
}
