<?php

namespace App\Http\Controllers;

use App\twitter;
use Illuminate\Http\Request;

class TwitterController extends Controller
{
    /**
     * @OA\Post (
     *      path="/api/twitts?title={title}",
     *      operationId="post twitt",
     *      tags={"twitts"},
     *      summary="post a twitt",
     *      description="return your new twitt",
     *     @OA\Parameter(
     *          name="title",
     *          required=true,
     *          in="path",
     *          example="my new twitt",
     *          ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     *
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


    /**
     * @OA\Post (
     *      path="/api/twitts/all",
     *      operationId="get all twitts by post",
     *      tags={"twitts"},
     *      summary="post but get all twitts",
     *      description="return all twitts",
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
