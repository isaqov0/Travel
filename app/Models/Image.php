<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory , SoftDeletes;
	
	 protected $fillable = [
		 'tour_id',
		 'tour_type',
		 'image'
	 ];
	 
	public function tour(): MorphTo
	{
		return $this->morphTo();
	}
}
