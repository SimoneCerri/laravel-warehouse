<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Supplier extends Model
{
    use HasFactory;

    /**
     * The product that belong to the supplier.
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
