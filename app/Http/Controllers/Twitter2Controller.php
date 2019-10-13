<?php

namespace App\Http\Controllers;

use App\twitter2;
use Illuminate\Http\Request;

class Twitter2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $twt = twitter2::
        get();
        return $twt->toJson();

    }
    
    public function post(Request $request)
    {
        $twt = new twitter2();
        $twt->title=$request["title"];
        $twt->title=$request->title;
        $twt->save();
        return $twt->toJson();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\twitter2  $twitter2
     * @return \Illuminate\Http\Response
     */
    public function show(twitter2 $twitter2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\twitter2  $twitter2
     * @return \Illuminate\Http\Response
     */
    public function edit(twitter2 $twitter2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\twitter2  $twitter2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, twitter2 $twitter2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\twitter2  $twitter2
     * @return \Illuminate\Http\Response
     */
    public function destroy(twitter2 $twitter2)
    {
        //
    }
}
