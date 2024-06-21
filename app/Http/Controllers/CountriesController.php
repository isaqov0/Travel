<?php
	
	namespace App\Http\Controllers;
	
	use App\Models\Countries;
	use App\Models\Tours;
	use Illuminate\Http\Request;
	use function Laravel\Prompts\alert;
	
	class CountriesController extends Controller
	{
		public function index($id)
		{
			$tours = Tours ::all();
			$tours_new = [];
			foreach ($tours as $tour) {
				if($tour->country_id == $id) {
					$tours_new[] = $tour;
				}
			}
			$country_id = Countries::find($id);
			return view('Front.countries.index', compact('tours_new','country_id', 'id'));
		}
	}
