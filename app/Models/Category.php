<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category_name', 'description'];

    /**
     * Get all of the product for the category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prodcuts(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
