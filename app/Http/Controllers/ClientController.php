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
}
