<?php
	
	namespace App\Http\Controllers\Admin;
	
	use App\Http\Controllers\Controller;
	use App\Http\Requests\StoreRegionsRequest;
	use App\Http\Requests\UpdateRegionsRequest;
	use App\Models\Countries;
	use App\Models\Regions;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Http;
	
	class RegionsController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 */
		public function index()
		{
			$regions = Regions ::all();
			return view('Admin.regions.index', compact('regions'));
		}
		
		/**
		 * Show the form for creating a new resource.
		 */
		public function create()
		{
			$regions = Regions ::all();
			$countries = Countries::all();
			
			return view('Admin.regions.create', compact('regions', 'countries'));
		}
		
		/**
		 * Store a newly created resource in storage.
		 */
		public function store(Request $request)
		{
		
			$request -> validate([
				'name' => 'required',
				'country_id' => 'required',
			]);
			Regions::create([
				'name' => $request->name,
				'country_id' => $request->country_id,
			]);
			return redirect()->route('admin.regions')->with('success', 'Region created successfully.');
		}
		
		/**
		 * Display the specified resource.
		 */
		public function show(Regions $regions)
		{
			//
		}
		
		/**
		 * Show the form for editing the specified resource.
		 */
		public function edit($id)
		{
			$regions = Regions ::find($id);
			$countries = Countries::all();
			return view('Admin.regions.edit', compact('regions', 'countries'));
		}
		
		/**
		 * Update the specified resource in storage.
		 */
		public function update(Request $request, $id)
		{
			request()->validate([
				'name' => 'required',
				'country_id' => 'required',
			]);
			$region = Regions::find($id);
			$region->update([
				'name' => $request->name,
				'country_id' => $request->country_id,
			]);
			return redirect()->route('admin.regions')->with('success', 'Region updated successfully.');
		}
		
		/**
		 * Remove the specified resource from storage.
		 */
		public function destroy($id)
		{
			$region = Regions::find($id);
			$region->delete();
			return redirect()->route('admin.regions')->with('success', 'Region deleted successfully.');
		}
	}
