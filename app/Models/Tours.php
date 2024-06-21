<?php
	
	namespace App\Models;
	
	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\Relations\BelongsTo;
	use Illuminate\Database\Eloquent\Relations\HasMany;
	use Illuminate\Database\Eloquent\SoftDeletes;
	
	class Tours extends Model
	{
		use HasFactory, SoftDeletes;
		
		protected $fillable = [
			'name',
			'date',
			'description',
			'duration',
			'image',
			'country_id',
			'region_id',
			'category_id',
			'price',
			'currency',
			'departure_city'
		];
		
		public function category(): BelongsTo
		{
			return $this -> belongsTo(Category::class);
		}
		
		public function country(): BelongsTo
		{
			return $this->belongsTo(Countries::class);
		}
		
		public function region(): BelongsTo
		{
			return $this -> belongsTo(Regions::class);
		}
		public function images()
		{
			return $this->morphMany(Image::class, 'tour');
		}
	}
