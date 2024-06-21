<?php
	
	namespace App\Livewire;
	
	use App\Models\Category;
	use App\Models\Countries;
	use Livewire\Component;
	
	class Tours extends Component
	{
		public $country_id = '';
		public $category_id = '';
		
		protected $listeners = [
			'course_id',
			'category_id'
		];
		
		public function course_id($id)
		{
			$this -> country_id = $id;
		}
		
		public function category_id($id)
		{
			$this -> category_id = $id;
		}
		
		public function render()
		{
			$tours = \App\Models\Tours ::with('category')
				-> when($this -> country_id != '', function($query) {
					return $query -> where('country_id', $this -> country_id);
				})
				-> get();
			$countries = Countries ::with('region') -> get();
			$categories = Category ::with('tours') -> get();
			return view('livewire.tours', compact('tours', 'countries', 'categories'));
		}
	}
