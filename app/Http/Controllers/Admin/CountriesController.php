<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\Regions;
use App\Models\Tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use function Laravel\Prompts\alert;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$countries = Countries::all();
	    $country_json  = Http::get('https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/by-code.json')->json();
        return view('Admin.countries.index', compact('countries', 'country_json'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
	    $countries  = Http::get('https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/by-code.json')->json();
		return view('Admin.countries.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		$rules = [
			'name' => 'required',
			'image' => 'required',
		];
		$this->validate($request, $rules);
	    $image = $request -> file('image');
		$image_name = time().'_'.$request->image->getClientOriginalName();
	    $image->move(public_path('assets/image/countries'), $image_name);
		
	    $countries_json  = Http::get('https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/by-code.json')->json();
		foreach ($countries_json as $key => $country) {
			if ($key==$request->name) {
				$country = Countries::create([
					'name' => $country['name'],
					'image' => $image_name,
					'flag' => $country['image']
				]);
			}
		}
		
		return redirect()->route('admin.countries');
    }

    /**
     * Display the specified resource.
     */
    public function show(Countries $countries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
	    $countries  = Countries::find($id);
	    $country_json  = Http::get('https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/by-code.json')->json();
	    return view('Admin.countries.edit', compact('countries','country_json'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
	    $request->validate([
			'name' => 'required',
		    'image' => 'required',
	    ]);
	    $image = $request -> file('image');
	    $image_name = time().'_'.$request->image->getClientOriginalName();
	    $image->move(public_path('assets/image/countries'), $image_name);
	    $countries  = Http::get('https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/by-code.json')->json();
	    foreach ($countries as $key => $country) {
			    $country_n = Countries::find($id);
		    if ($key==$request->name) {
			    $country = $country_n->update([
				    'name' => $country['name'],
				    'image' => $image_name,
				    'flag' => $country['image']
			    ]);
		    }else{
				$country_n ->update([
					'image' => $image_name,
				]);
		    }
	    }
		return redirect()->route('admin.countries');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
		$tours = Tours::all();
		$regions = Regions::all();
		foreach($tours as $tour){
			foreach($regions as $region) {
				if($tour -> country_id & $region->country_id === $id) {
					alert("BU davlatni o'chrib bo'lmaydi");
				} else {
					DB ::table('countries') -> where('id', '=', $id) -> delete();
				}
			}
		}
	    return redirect() -> route('admin.countries');
    }
}
