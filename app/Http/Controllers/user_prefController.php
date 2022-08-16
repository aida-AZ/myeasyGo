<?php

namespace App\Http\Controllers;

use App\userPref;
use Illuminate\Http\Request;

class user_prefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user_pref = userPref::all();
        
        return view('user_pref.index',compact('user_pref'));
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_pref.create');
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
        $request->validate([
            'attraction' => 'required',
        ]);
  
        userPref::create($request->all());
   
        return redirect()->route('user_pref.index')
                        ->with('success','Subject created successfully.');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserPref  $userPref
     * @return \Illuminate\Http\Response
     */
    public function show(UserPref $userPref)
    {
        return view('user_pref.show',compact('userPref'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserPref  $userPref
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPref $userPref)
    {
        return view('user_pref.edit',compact('userPref'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserPref  $userPref
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserPref $userPref)
    {
        $request->validate([
            'name' => 'required',
        ]);
  
        $subject->update($request->all());
  
        return redirect()->route('user_pref.index')
                        ->with('success',' updated successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserPref  $userPref
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPref $userPref)
    {
        $userPref->delete();

       return redirect()->route('user_pref.index')
       ->with('success',' deleted successfully');
        //
    }
}
