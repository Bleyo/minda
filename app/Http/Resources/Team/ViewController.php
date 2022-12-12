<?php

namespace App\Http\Resources\Team;

use App\Sources\Models\Team;
use App\Http\Resources\Team\Traits\SubscriberController as TraitsSubscriberViews;
use App\Http\Resources\Team\Traits\ContentController as TraitsContentViews;
use App\Http\Resources\AppController;

class ViewController extends AppController
{
    use TraitsContentViews, TraitsSubscriberViews;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }
}
