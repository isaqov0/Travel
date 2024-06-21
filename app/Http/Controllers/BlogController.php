<?php
	
	namespace App\Http\Controllers;
	
	use App\Http\Requests\StoreToursRequest;
	use App\Http\Requests\UpdateToursRequest;
	use App\Models\Category;
	use App\Models\Countries;
	use App\Models\Tours;
	
	class BlogController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 */
		public function index()
		{
			$tours = Tours ::all();
			$countries = Countries ::with('region')->get();
			$categories = Category ::with('tours')->get();
			return view('Front.index', compact('categories', 'tours', 'countries'));
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
		public function store(StoreToursRequest $request)
		{
			//
		}
		
		/**
		 * Display the specified resource.
		 */
		public function show(Tours $tours)
		{
			//
		}
		
		/**
		 * Show the form for editing the specified resource.
		 */
		public function edit(Tours $tours)
		{
			//
		}
		
		/**
		 * Update the specified resource in storage.
		 */
		public function update(UpdateToursRequest $request, Tours $tours)
		{
			//
		}
		
		/**
		 * Remove the specified resource from storage.
		 */
		public function destroy(Tours $tours)
		{
			//
		}
	}
