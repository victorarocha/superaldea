<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoorRequest;
use App\Http\Requests\UpdateDoorRequest;
use App\Models\Door;

class DoorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Door $door)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Door $door)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoorRequest $request, Door $door)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Door $door)
    {
        //
    }
}
