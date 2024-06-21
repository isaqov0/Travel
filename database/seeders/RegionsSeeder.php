<?php
	
	namespace Database\Seeders;
	
	use App\Models\Regions;
	use Illuminate\Database\Console\Seeds\WithoutModelEvents;
	use Illuminate\Database\Seeder;
	
	class RegionsSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 */
		public function run(): void
		{
			Regions ::create([
				'name' => 'Samarqand',
				'country_id' => 1,
			]);
			Regions ::create([
				'name' => 'Mascova',
				'country_id' => 2,
			]);
			Regions ::create([
				'name' => 'Navasibr',
				'country_id' => 2,
			]);
		}
	}
