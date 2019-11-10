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
                orderBy('id', 'desc')->
                //paiginate(10)->
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

    public function delete(Request $request)
    {
        $d=$request->id;
        $b=twitter::where('id','like',$d)->delete();
        
        return "Twitte deleted";
    }

    public function update2(Request $request)
    {
        //$d=$request->id;
        //if($request->title)
        //$b.title==$request->title;
        //$b=twitter::where('id','like',$d)->update();
        //$b->save();
        $request->validate([
            'title'=>'required'
        ]);
        $twt->update($request->all());
        return "Twitte updated";
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
    public function update(Request $request)
    {
       $id=$request->id;
       if( $b=twitter::where('id','like', $id)->update($request->all()))
        {return "twitte updated";}
        else{
            return "id not found";  
        }
   
    
       /* $request->validate([
            'title'=>'required'
        ]);
        $twitter->update($request->all());
        return $twitter->toJson();
        */
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
