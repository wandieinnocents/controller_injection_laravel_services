<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ShipItem extends Controller
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
        //shows us the form for creating a message
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //creates the logic for sending our message
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //shows a single message
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit a single message
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //logic for updating a message is here
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //logic for deleting a message
    }
}
