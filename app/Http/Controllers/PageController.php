<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * @return view
     */
    public function about()
    {
       return view('pages.about');
    }

    /**
     * @return view
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
