<?php

namespace App\Http\Resources\User;

use App\Sources\Models\User;
use App\Http\Resources\User\Traits\ProfileController as TtraitsProfileView;
use App\Http\Resources\User\Traits\OnDutyController as TraitsOnDutyView;
use App\Http\Resources\AppController;

class ViewController extends AppController
{
    use TraitsOnDutyView, TtraitsProfileView;

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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }
}
