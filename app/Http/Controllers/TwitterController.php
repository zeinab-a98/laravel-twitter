<?php

namespace App\Http\Controllers;

use App\twitter;
use Illuminate\Http\Request;

class TwitterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $twt = twitter::
            //    ->orderBy('name', 'desc')
                //take(10)
               get();

        return $twt->toJson();
    }


    public function post(Request $request)
    {
        $twt = new twitter();
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
     * @param  \App\twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function show(twitter $twitter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function edit(twitter $twitter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, twitter $twitter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function destroy(twitter $twitter)
    {
        //
    }
}
