<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    protected CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(): View
    {
        $categories = $this->categoryService->getAllCategories();

        return \view('categories.index', [
            'categories' => $categories,
        ]);
    }

    public function create(): View
    {
        return \view('categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();

        $this->categoryService->store($data);

        return redirect(route('categories.index'));
    }

    public function edit(Category $category): View
    {

        return \view('categories.edit', [
            'category' => $category,
        ]);
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $this->categoryService->update($request->all(), $category);

        return redirect(route('categories.index'));
    }

    public function destroy(Category $category): RedirectResponse
    {
        $this->destroy($category);

        return redirect(route('categories.index'));
    }
}
