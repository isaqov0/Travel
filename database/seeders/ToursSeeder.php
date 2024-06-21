<?php
	
	namespace Database\Seeders;
	
	use App\Models\Tours;
	use Illuminate\Database\Console\Seeds\WithoutModelEvents;
	use Illuminate\Database\Seeder;
	
	class ToursSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 */
		public function run(): void
		{
		$tour=	Tours ::create([
				'name' => 'Turk merosi',
				'description' => 'Turk merosi juda qadimiy shaharlardan biri',
				'date' => '2022-03-18',
				'duration' => '20',
				'category_id' => '1',
				'country_id' => '1',
				'region_id' => '1',
				'price' => '20',
				'currency' => 'USD',
				'departure_city' => 'Fargona',
			]);
		$tour2=	Tours ::create([
				'name' => 'Bobor bogi',
				'description' => 'Turli qiziqarli oyinlar',
				'date' => '2022-03-18',
				'duration' => '2',
				'category_id' => '2',
				'country_id' => '1',
				'region_id' => '2',
				'price' => '200',
				'currency' => 'USD',
				'departure_city' => 'Tashkent',
			]);
		
		$tour->images()->create(['image'=>  '1717753292_office-dark.jpg']);
		$tour2->images()->create(['image'=>  '1717753292_office-dark.jpg']);
		}
	}
