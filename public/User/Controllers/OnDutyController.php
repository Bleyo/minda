<?php

namespace App\Http\Resources\User\OnDutyController;

use App\Sources\Models\OnDuty;
use App\Http\Resources\User\Requests\UpdateOnDutyRequest;
use App\Http\Resources\User\Requests\StoreOnDutyRequest;
use App\Http\Resources\AppController;


class OnDutyController extends AppController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOnDutyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOnDutyRequest $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOnDutyRequest  $request
     * @param  \App\Models\OnDuty  $onDutyUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOnDutyRequest $request, OnDuty $onDutyUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OnDuty  $onDutyUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnDuty $onDutyUser)
    {
        //
    }
}
