<?php
	
	use App\Http\Controllers\Admin\AdminController;
	use App\Http\Controllers\Admin\CategoryController;
	use App\Http\Controllers\Admin\CountriesController;
	use App\Http\Controllers\Admin\RegionsController;
	use App\Http\Controllers\BlogController;
	use App\Http\Controllers\FastToursControllerController;
	use App\Http\Controllers\ToursController;
	use App\Http\Controllers\ToursPageController;
	use App\Models\Category;
	use App\Models\Countries;
	use App\Models\Tours;
	use Illuminate\Support\Facades\Route;
	
	/*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider and all of them will
	| be assigned to the "web" middleware group. Make something great!
	|
	*/
	Route::get('/', [BlogController::class, 'index']);
	
	Route::get('admin', [AdminController::class, 'index'])->name('admin');
	Route::get('admin/tours', [AdminController::class, 'index']);
	Route::get('admin/tours/create', [AdminController::class, 'create'])->name('admin.tours.create');
	Route::post('admin/tours/store', [AdminController::class, 'store'])->name('admin.tours.store');
	Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('admin.tours.edit');
	Route::post('/update/{id}', [AdminController::class, 'update'])->name('admin.tours.update');
	Route::get('/delete/{id}', [AdminController::class, 'destroy'])->name('admin.tours.destroy');
	
	Route::get('admin/countries', [CountriesController::class, 'index'])->name('admin.countries');
	Route::get('admin/countries/edit/{id}', [CountriesController::class, 'edit'])->name('admin.countries.edit');
	Route::get('admin/countries/create', [CountriesController::class, 'create'])->name('admin.countries.create');
	Route::post('/post', [CountriesController::class, 'store'])->name('admin.countries.store');
	Route::post('admin/countries/update/{id}', [CountriesController::class, 'update'])->name('admin.countries.update');
	Route::get('/countries/delete/{id}', [CountriesController::class, 'destroy'])->name('admin.countries.destroy');
	
	Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories');
	Route::get('admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
	Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
	Route::post('admin/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
	Route::post('admin/categories/update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
	Route::get('admin/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
	
	Route::get('admin/regions', [RegionsController::class, 'index'])->name('admin.regions');
	Route::get('admin/regions/edit/{id}', [RegionsController::class, 'edit'])->name('admin.regions.edit');
	Route::get('admin/regions/create', [RegionsController::class, 'create'])->name('admin.regions.create');
	Route::post('admin/regions/store', [RegionsController::class, 'store'])->name('admin.regions.store');
	Route::post('admin/regions/update/{id}', [RegionsController::class, 'update'])->name('admin.regions.update');
	Route::get('admin/regions/delete/{id}', [RegionsController::class, 'destroy'])->name('admin.regions.destroy');
	
	Route::get('tours/page/{id}', [ToursPageController::class, 'index'])->name('admin.tours.page');
	
	Route::get('/countries/{id}', [\App\Http\Controllers\CountriesController::class, 'index']);
	
	Route::get('category/{id}', function ($id) {
		$tours = Tours::with('category')->where('category_id', $id)->get();
		$categories = Category::all();
		return view('Front.category', compact('tours', 'categories'));
	});
	
	
	Route ::get('tours', [ToursController::class, 'index'])->name('tours.index');
	Route ::get('/gorjashhie', [FastToursControllerController::class, 'index']);
	Route ::get('/countries', function() {
		$countries = Countries::all();
		return view('Front.countries',compact('countries'));
	});
	Route ::get('/oformlenie-viz', function() {
		return view('Front.oformlenive-viz');
	});
	Route ::get('/aviabilety', function() {
		return view('Front.aviabilety');
	});
	Route ::get('/contacts', function() {
		return view('Front.contacts');
	});