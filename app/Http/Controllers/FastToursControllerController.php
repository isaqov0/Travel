<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFastToursControllerRequest;
use App\Http\Requests\UpdateFastToursControllerRequest;
use App\Models\Category;
use App\Models\Countries;
use App\Models\FastToursController;
use App\Models\Tours;

class FastToursControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
	    $tours = Tours ::all();
	    $countries = Countries ::with('region')->get();
	    $categories = Category ::with('tours')->get();
	    return view('Front.gorjashhie', compact('categories', 'tours', 'countries'));
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
    public function store(StoreFastToursControllerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FastToursController $fastToursController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FastToursController $fastToursController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFastToursControllerRequest $request, FastToursController $fastToursController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FastToursController $fastToursController)
    {
        //
    }
}
