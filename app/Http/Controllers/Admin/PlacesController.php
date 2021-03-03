<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;
use App\Models\Category;


class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::orderBy('created_at', 'desc')->get();

        return view('admin.places.index', [
            'places' => $places
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('admin.places.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $category = Category::find($request->cat_id);

        $place         = new Place();
        $place->title  = $request->title;
        $place->img    = $request->img;
        $place->text   = $request->text;
        $place->adress = $request->adress;

        $place->save();
        $place->categories()->attach($category);

        return redirect()->back()->with('Success', 'Заведение было успешно добавлено!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        return view('admin.places.show', [
            'place' => $place
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        $cats = Category::orderBy('created_at', 'desc')->get();
        $cat = $place->categories;
        
        return view('admin.places.edit', [
            'cats'       => $cats,
            'place'      => $place,
            'cat'        => $cat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        $place->categories()->detach($categories);

        $category = Category::find($request->cat_id);
        $place->categories()->attach($category);

        $place->title  = $request->title;
        $place->adress = $request->adress;
        $place->img    = $request->img;
        $place->text   = $request->text;

        $place->save();

        return redirect()->back()->with('Success', 'Заведение было успешно обновлено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        $place->categories()->detach($categories);
        $place->delete();

        return redirect()->back()->with('Success', 'Ресторан был успешно удален!');
    }
}
