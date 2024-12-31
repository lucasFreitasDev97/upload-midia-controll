<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryService
{
    public function getAllCategories(): Collection
    {
        return Category::all();
    }

    public function store(array $data): void
    {
        $pathToCover = $data['path_to_cover']->store('category-files', 'public');
        $category = new Category();
        $category->name = $data['name'];
        $category->path_to_cover = '/storage/' . $pathToCover;
        $category->save();
    }

    public function update(array $data, Category $category): void
    {
        $pathToCover = $data['path_to_cover']->store('category-files', 'public');
        $category->name = $data['name'];
        $category->path_to_cover = '/storage/' . $pathToCover;
        $category->save();
    }

    public function destroy(Category $category): void
    {
       $category->delete();
    }
}
