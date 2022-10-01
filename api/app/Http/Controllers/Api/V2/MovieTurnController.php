<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Models\MoviesTurn;
use Illuminate\Http\Request;

use App\Http\Resource\V2\MovieTurnResource;
use App\Http\Resource\V2\MovieTurnCollection;



class MovieTurnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  \App\Models\MoviesTurn  $moviesTurn
     * @return \Illuminate\Http\Response
     */
    public function show(MoviesTurn $moviesTurn)
    {
        return new MoviesTurnResource($moviesTurn);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MoviesTurn  $moviesTurn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MoviesTurn $moviesTurn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MoviesTurn  $moviesTurn
     * @return \Illuminate\Http\Response
     */
    public function destroy(MoviesTurn $moviesTurn)
    {
        //
    }
}
