<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        $title = 'Treni in partenza oggi';

        return view('home', compact('trains', 'title'));
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
