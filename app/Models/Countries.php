<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Countries extends Model
{
    use HasFactory , SoftDeletes;
	protected $fillable = [
		'name',
		'image',
		'flag',
	];
	
	public function region(): HasMany
	{
		return $this -> hasMany(Regions::class, 'country_id', 'id');
	}
}
