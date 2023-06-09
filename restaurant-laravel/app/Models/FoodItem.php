<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    protected $table = 'food_items';
    protected $fillable = [
        'title', 'description', 'image_url', 'price', 'category_id'
    ];
    public function food_category()
    {
        return $this->belongsTo(FoodCategory::class);
    }
}
