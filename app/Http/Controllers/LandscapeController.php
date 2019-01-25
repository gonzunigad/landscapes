<?php

namespace App\Http\Controllers;

use App\Landscape;
use Illuminate\Http\Request;

class LandscapeController extends Controller
{
    public function index(Request $request)
    {
        return Landscape::all();
    }

    public function store(Request $request)
    {
        $landscape = new Landscape();
        $landscape->name = $request->get('name');
        $landscape->followers = $request->get('followers');
        $landscape->following = $request->get('following');
        $landscape->likes = $request->get('likes');
        $landscape->save();

        return $landscape;
    }
}
