<?php

namespace App\Http\Controllers;

use App\Hotels;
use App\Facilities;
use App\Gallery;
use Illuminate\Http\Request;

class HotelsController extends Controller
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
            $hotels = Hotels::all();
        }
        elseif( $role == 2 )
        {
            $hotels = Hotels::where('user_id',\Auth::user()->id)->get();
        }
        return view('admin/hotels',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $hotel = new Hotels();
        $hotel = $request->except('_token','wifi','parking','spa','ac','images');
        $hotel = \Auth::user()->hotels()->create($hotel);
        $facilities = new Facilities();
        $facilities = $request->except('name','city','rate_per_person','capacity','phone','address','_token','images');
        $hotel->facilities()->create($facilities);

        if( $request->images )
        {
            $path = 'Images\Hotels\\';
            foreach( $request->images as $img )
            {
                $pic = new Gallery(); 
                $pic->image = $img->getClientOriginalName();
                $pic->unique_identifier = sha1(time().uniqid()).'jpg';
                $pic->path = $path;

                $hotel->images()->save($pic);

                $img->storeAs($path, $pic->unique_identifier);
            }
        }
        

        return redirect('hotels')->with('success','Hotel is added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function show(Hotels $hotel)
    {
        // return $hotel->events->first()->images->first()->path;
        return view('hotels.hotel detail',compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotels $hotel)
    {
        return view('hotels/create',compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotels $hotel)
    {
        $hotel->update($request->except('_token','wifi','parking','spa','ac','images'));
        
        if( isset( $hotel->facilities ) )
        {
            $wifi = $parking = $spa = $ac = 0;
            if( isset($request->wifi) ) $wifi = $request->wifi;
            if( isset($request->parking) ) $parking = $request->parking;
            if( isset($request->spa) ) $spa = $request->spa;
            if( isset($request->ac) ) $ac = $request->ac;
            $facility = 
            [
                'wifi' => $wifi,
                'parking' => $parking,
                'spa' => $spa,
                'ac' => $ac,
            ];
            $hotel->facilities()->update($facility);
        }
        else 
        {
            $facilities = new Facilities();
            $facilities = $request->except('_method','name','city','capacity','phone','address','_token','images');
            $hotel->facilities()->create($facilities);
        }
        

        $path = 'Images\Hotels\\';
        if( isset($request->images) )
        {
            foreach( $request->images as $img )
            {
                $pic = new Gallery(); 
                $pic->image = $img->getClientOriginalName();
                $pic->unique_identifier = sha1(time().uniqid()).'jpg';
                $pic->path = $path;

                $hotel->images()->save($pic);

                $img->storeAs($path, $pic->unique_identifier);
            }
        }
        

        return redirect('hotels')->with('success','Hotel is updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotels $hotel)
    {
        $hotel->facilities()->delete();
        foreach( $hotel->images as $img )
        {
            \Storage::delete($img->path.$img->unique_identifier);
        }
        $hotel->images()->delete();
        
        foreach( $hotel->events as $event )
        {
            foreach( $event->images as $img )
            {
                \Storage::delete($img->path.$img->unique_identifier);
                $img->delete();
            }
            $event->delete();    
        }
        
        $hotel->delete();

        return back()->with('success','Hotel is deleted successfully.');
    
    }

    public function search_hotel(Request $request)
    {
        $capacity = explode('-',$request->people) [1];
        // $hotels = Hotels::where('city',$request->city)->where('capacity','>=',$capacity)->get();
        $hotels = Hotels::where('city',$request->city)->get();
        return view('hotels.search hotels',compact('hotels'));
    }
}
