<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vendor as Requests;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use App\Repositories\VendorRepository;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    public function __construct(
        private VendorRepository $vendorRepository,
        private CategoryRepository $categoryRepository,
    ) {
    }

    public function show(Requests\ShowRequest $request, Category $category): View
    {
        return view('categories.show', [
            'category' => $category,
            'categories' => $this->categoryRepository->getAll(),
            'vendors' => $this->vendorRepository->getByCategory($category->id),
        ]);
    }
}