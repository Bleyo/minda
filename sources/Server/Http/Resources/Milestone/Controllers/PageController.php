<?php

namespace App\Http\Resources\Milestone\Controllers;

use Illuminate\View\View;
use App\Http\AppController;

class PageController extends AppController
{
    public function index()
    {
        return View::make('group.index');
    }

    public function create()
    {
        return View::make('group.create');
    }

    public function edit($group)
    {
        return View::make('group.edit');
    }

    public function show($group)
    {
        return View::make('group.show');
    }
}
