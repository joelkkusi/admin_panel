<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    protected $fillable = [
        'name', 'country', 'description'
    ];

    public function brands(): HasMany
    {
        return $this->hasMany(Brand::class);
    }
}
