<?php

namespace App\Http\Resources\Milestone\Controllers;

use App\Sources\Models\Milestone;
use App\Http\Resources\Milestone\Requests\UpdateMilestoneRequest;
use App\Http\Resources\Milestone\Requests\StoreMilestoneRequest;


class MilestoneController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMilestoneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMilestoneRequest $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMilestoneRequest  $request
     * @param  \App\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMilestoneRequest $request, Milestone $milestone)
    {
        //
    }
}
