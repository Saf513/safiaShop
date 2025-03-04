<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description'
       
    ];

    // Define relationship with products
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Define relationship with parent category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Define relationship with child categories
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
