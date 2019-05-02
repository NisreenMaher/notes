<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index() {
        $title = ' Hello to index';
        return view('pages.index')->with('title',$title);
    }

    public function about() {
        return view('pages.about');
    }


}
