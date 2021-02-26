<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        $places_count = Place::all()->count();
        $users_count = User::all()->count();

        return view('admin.home.index', [
            'places_count' => $places_count,
            'users_count' => $users_count
        ]);
    }
}
