<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactMeRequest;
use App\Http\Resources\Api\V1\ContactResource;
use App\Models\ContactMe;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ContactResource::collection(ContactMe::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactMeRequest $request)
    {
        return new ContactResource(ContactMe::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactMe $contact)
    {
        return new ContactResource($contact);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactMe $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactMe $contact)
    {
        //
    }
}
