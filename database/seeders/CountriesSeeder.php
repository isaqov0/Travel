<?php
	
	namespace Database\Seeders;
	
	use App\Models\Countries;
	use Illuminate\Database\Console\Seeds\WithoutModelEvents;
	use Illuminate\Database\Seeder;
	
	class CountriesSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 */
		public function run(): void
		{
			Countries ::create([
				'name' => 'Russia',
				'image' => '1717753292_office-dark.jpg',
				'flag' => 'https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/images/RU.svg',
			]);
			Countries ::create([
				'name' => 'Uzbekistan',
				'image' => '1717753292_office-dark.jpg',
				'flag' => 'https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/images/UZ.svg',
			]);
			Countries ::create([
				'name' => 'United Kingdom',
				'image' => '1717753292_office-dark.jpg',
				'flag' => 'https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/images/GB.svg',
			]);
			
		}
	}
