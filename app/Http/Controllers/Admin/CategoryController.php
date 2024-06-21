<?php
	
	namespace App\Http\Controllers\Admin;
	
	use App\Http\Controllers\Controller;
	use App\Models\Category;
	use Illuminate\Http\Request;
	
	class CategoryController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 */
		public function index()
		{
			$categories = Category ::with('tours') -> get();
			return view('Admin.categories.index', compact('categories'));
		}
		
		/**
		 * Show the form for creating a new resource.
		 */
		public function create()
		{
			$categories = Category ::all();
			return view('Admin.categories.create', compact('categories'));
		}
		
		/**
		 * Store a newly created resource in storage.
		 */
		public function store(Request $request)
		{
			$request -> validate([
				'name' => 'required',
			]);
			Category ::create([
				'name' => $request -> name,
			]);
			return redirect() -> route('admin.categories');
		}
		
		/**
		 * Display the specified resource.
		 */
		public function show(Category $category)
		{
			//
		}
		
		/**
		 * Show the form for editing the specified resource.
		 */
		public function edit($id)
		{
			$categories = Category ::find($id);
			return view('Admin.categories.edit', compact('categories'));
		}
		
		/**
		 * Update the specified resource in storage.
		 */
		public function update(Request $request, $id)
		{
			
			$request -> validate([
				'name' => 'required',
			]);
			$category = Category ::find($id);
			$category -> update([
				'name' => $request -> name,
			]);
			return redirect() -> route('admin.categories');
		}
		
		/**
		 * Remove the specified resource from storage.
		 */
		public function destroy($id)
		{
			$category = Category ::find($id);
			$category -> delete();
			return redirect() -> route('admin.categories');
		}
	}
