<?php

namespace App\Http\Controllers;

use App\Events;
use App\Gallery;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = \Auth::user()->user_role;
        if( $role == 1 )
        {
            $Events = Events::all();
        }
        elseif( $role == 2 )
        {
            $Events = Events::join('hotels','hotels.id','=','events.hotel_id')
                      ->join('users','users.id','=','hotels.user_id')
                      ->select('events.*')->where('users.id',\Auth::user()->id)->get();
        }
        return view('admin\events',compact('Events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Events();
        $event = $event->create($request->except('_token','images'));

        if( $request->images )
        {
            $path = 'Images\Events\\';
            foreach( $request->images as $img )
            {
                $pic = new Gallery(); 
                $pic->image = $img->getClientOriginalName();
                $pic->unique_identifier = sha1(time().uniqid()).'jpg';
                $pic->path = $path;

                $event->images()->save($pic);

                $img->storeAs($path, $pic->unique_identifier);
            }    
        }
        

        return redirect('events')->with('success','Event is add successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $event)
    {
        return view('events.create',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $event)
    {
        $event->update($request->except('_method','images','_token'));
        if( isset($request->images) )
        {
             $path = 'Images\Events\\';
            foreach( $request->images as $img )
            {
                $pic = new Gallery(); 
                $pic->image = $img->getClientOriginalName();
                $pic->unique_identifier = sha1(time().uniqid()).'jpg';
                $pic->path = $path;

                $event->images()->save($pic);

                $img->storeAs($path, $pic->unique_identifier);
            }
        }
        
        return redirect('events')->with('success','Event is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $event)
    {
        foreach( $event->images as $img )
        {
            \Storage::delete($img->path.$img->unique_identifier);
            $img->delete();
        }
        $event->delete();

        return back()->with('success','Event is deleted successfully.');
    }
}
