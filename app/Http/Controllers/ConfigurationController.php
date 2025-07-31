<?php

namespace App\Http\Controllers;

use App\Models\configuration;
use App\Http\Requests\StoreconfigurationRequest;
use App\Http\Requests\UpdateconfigurationRequest;

class ConfigurationController extends Controller
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
    public function store(StoreconfigurationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(configuration $configuration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(configuration $configuration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateconfigurationRequest $request, configuration $configuration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(configuration $configuration)
    {
        //
    }
}
