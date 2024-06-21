<?php
	
	namespace App\Http\Controllers\Admin;
	
	use App\Http\Controllers\Controller;
	use App\Models\Category;
	use Illuminate\Http\Request;
	use App\Models\Countries;
	use App\Models\Regions;
	use App\Models\Tours;
	use Illuminate\Support\Facades\Http;
	use function Laravel\Prompts\alert;
	
	class AdminController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 */
		public function index()
		{
			$tours = Tours::with('images')->get();
			return view('Admin.tours.index', compact('tours'));
		}
		
		/**
		 * Show the form for creating a new resource.
		 */
		public function create()
		{
			$countries = Countries ::all();
			$categories = Category ::all();
			$regions = Regions ::all();
			$currency = Http::get('https://nbu.uz/uz/exchange-rates/json/')->json();
			return view('Admin.tours.create', compact('countries', 'categories', 'regions' , 'currency'));
		}
		
		/**
		 * Store a newly created resource in storage.
		 */
		public function store(Request $request)
		{
			$request -> validate([
				'name' => 'required',
				'description' => 'required',
				'price' => 'required',
				'currency' => 'required',
				'duration' => 'required',
				'departure_city' => 'required',
				'country_id' => 'required',
				'category_id' => 'required',
				'date' => 'required',
				'region_id' => 'required',
			]);
			
			$image = $request -> file('image');
			$new_image = uniqid() . $image -> getClientOriginalName();
			$image -> move(public_path('assets/image'), $new_image);
			$tours = Tours ::create([
					'name' => $request -> name,
					'description' => $request -> description,
					'price' => $request -> price,
					'currency' => $request -> currency,
					'duration' => $request -> duration,
					'departure_city' => $request -> departure_city,
					'country_id' => $request -> country_id,
					'category_id' => $request -> category_id,
					'date' => $request -> date,
					'region_id' => $request -> region_id,
				]
			);
			$tours -> images() -> create(['image' => $new_image]);
			
			return redirect() -> route('admin');
		}
		
		/**
		 * Display the specified resource.
		 */
		public function show(AdminController $toursController)
		{
			//
		}
		
		/**
		 * Show the form for editing the specified resource.
		 */
		public function edit($id)
		{
			$countries = Countries ::all();
			$categories = Category ::all();
			$regions = Regions ::all();
			$tours = Tours ::with('images')->where('id', $id)->first();
			$currency = Http::get('https://nbu.uz/uz/exchange-rates/json/')->json();
			return view('Admin.tours.edit', compact('tours', 'countries', 'categories', 'regions','currency'));
		}
		
		/**
		 * Update the specified resource in storage.
		 */
		public function update(Request $request, $id)
		{
//			dd($request->category_id);
			$tours = Tours::find($id);
			$image = $request -> file('image');
			$new_image = uniqid() . $image -> getClientOriginalName();
			$image -> move(public_path('assets/image'), $new_image);
			$tours -> images() -> update(['image' => $new_image]);
			$tours -> update([
					'name' => $request -> name,
					'description' => $request -> description,
					'price' => $request -> price,
					'currency' => $request -> currency,
					'duration' => $request -> duration,
					'departure_city' => $request -> departure_city,
					'country_id' => $request -> country_id,
					'category_id' => $request -> category_id,
					'date' => $request -> date,
					'region_id' => $request -> region_id,
				]
			);
			return redirect() -> route('admin');
		}
		
		/**
		 * Remove the specified resource from storage.
		 */
		public function destroy($id)
		{
			$tours = Tours::find($id);
			$tours -> delete();
			return redirect() -> route('admin');
		}
	}
