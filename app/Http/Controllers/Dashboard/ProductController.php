<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Country;
use App\Http\Controllers\Controller;
use App\Product;
use App\Traits\FileTrait;
use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Session;

class ProductController extends Controller
{
    use FileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $model = User::where('role', 'player')->get();
        return view('dashboard.pages.players.index')->withModel($model);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        $countries = Country::all();
        return view('dashboard.pages.players.create')->withCountries($countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'country' => $request->country,
            'gender' => $request->gender,
            'age' => $request->age,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'role' => 'player',
        ]);

        Session::flash('success', 'Player added successfully!');
        return redirect()->route('players.index');
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
        $player = User::where('role', 'player')->find($id);
        $countries = Country::all();
        return view('dashboard.pages.players.edit')->withCountries($countries)->withPlayer($player);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,id,'.$id,
            'country' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password)
            $user->password = bcrypt($request->password);
        $user->country = $request->country;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->instagram = $request->instagram;
        $user->save();

        Session::flash('success', 'Player updated successfully!');
        return redirect()->route('players.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        User::where('id', $id)->where('role', 'player')->delete();
        return redirect()->route('players.index');
    }
}
