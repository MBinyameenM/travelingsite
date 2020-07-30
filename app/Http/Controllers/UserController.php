<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
    	return view('admin\users', compact('users'));
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
     *
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        foreach( $user->hotels as $hotel)
        {
            $hotel->facilities()->delete();
            foreach( $hotel->images as $img )
            {
                \Storage::delete($img->path.$img->unique_identifier);
            }

            foreach( $hotel->events as $event )
            {
                foreach( $event->images as $img )
                {
                    \Storage::delete($img->path.$img->unique_identifier);
                    $img->delete();
                }
                $event->delete();    
            }
            $hotel->ratings()->delete();
            $hotel->images()->delete();
            $hotel->delete();
        }

        $user->delete();
        return back()->with(['success' => 'User role is deleted successfully.']);
    }

    public function change_role(User $user)
    {
        if( $user->user_role == 1 )
        $user->user_role = 2;
        elseif( $user->user_role == 2 )
        $user->user_role = 1;

        $user->save();

        return back()->with(['success' => 'User role is changed successfully.']);

    }

    public function change_status(User $user)
    {
        if( $user->status == 1 )
        { 
            $user->status = 0;
            $user->save();
            return back()->with(['success' => 'User is blocked.']);
        }
        
            $user->status = 1;
            $user->save();
            return back()->with(['success' => 'User is unblocked.']);

    }
}
