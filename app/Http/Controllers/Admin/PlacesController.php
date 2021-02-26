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

        $place = new Place();
        $place->title  = $request->title;
        $place->img    = $request->img;
        $place->text   = $request->text;
        $place->cat_id = $request->cat_id;
        $place->adress = $request->adress;

        $category->places()->save($place);

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
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('admin.places.edit', [
            'categories' => $categories,
            'place'     => $place
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
        $place->title  = $request->title;
        $place->adress = $request->adress;
        $place->cat_id = $request->cat_id;
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
        $place->delete();

        return redirect()->back()->with('Success', 'Ресторан біл успешно удален!');
    }
}
