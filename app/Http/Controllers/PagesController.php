<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function contact_us()
    {
        return view('pages/contact us');
    }

    public function hotels()
    {
        $hotels = \App\Hotels::latest()->get();
        return view('hotels/index',compact('hotels'));
    }

    public function events()
    {
        $events = \App\Events::latest()->get();
        return view('pages/events',compact('events'));
    }


}
