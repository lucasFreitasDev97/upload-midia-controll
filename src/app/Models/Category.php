<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PHPUnit\Logging\JUnit\Subscriber;

class Category extends Model
{
    use HasFactory;

    protected $fillable= ['name', 'sub_category_id', 'path_to_cover'];

    public function subCategories(): HasMany
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }
}
