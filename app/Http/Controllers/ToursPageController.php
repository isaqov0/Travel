<?php
	
	namespace App\Http\Controllers;
	use App\Models\Tours;
	
	class ToursPageController extends Controller
	{
		public function index($id)
		{
			$tours = Tours ::find($id);
			$tour_all = Tours::all();
			return view('Front.tours.index', compact('tours', 'id','tour_all'));
		}
	}