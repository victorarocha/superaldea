<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkerTypeRequest;
use App\Http\Requests\UpdateWorkerTypeRequest;
use App\Models\Service;

class WorkerTypeController extends Controller
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
    public function store(StoreWorkerTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $workerType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $workerType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkerTypeRequest $request, Service $workerType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $workerType)
    {
        //
    }
}
