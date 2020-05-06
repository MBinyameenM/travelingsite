<?php

namespace App\Http\Controllers;

use App\EventCategories;
use Illuminate\Http\Request;

class EventCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $EventCategories = EventCategories::all();
        return view('admin\event_categories',compact('EventCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new EventCategories();
        $category->create($request->except('_token'));
        return back()->with('success','Event Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventCategories  $eventCategories
     * @return \Illuminate\Http\Response
     */
    public function show(EventCategories $eventCategory)
    {
        return $eventCategory;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventCategories  $eventCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(EventCategories $eventCategory)
    {
        return $eventCategory;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventCategories  $eventCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventCategories $eventCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventCategories  $eventCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventCategories $eventCategory)
    {
         $eventCategory->delete();
         return back()->with('success','Category is successfully deleted.');
    }
}
