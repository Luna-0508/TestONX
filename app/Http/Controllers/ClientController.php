<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(UserStoreRequest $request)
    {
        // Will return only validated data
        
        $validated = $request->validated();
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function show(Client $client)
    {
        return $client;
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
