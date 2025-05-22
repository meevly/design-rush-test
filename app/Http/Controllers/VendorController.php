<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vendor as Requests;
use App\Models\Vendor;
use App\Repositories\CategoryRepository;
use App\Repositories\VendorRepository;
use Illuminate\Contracts\View\View;

class VendorController extends Controller
{
    public function __construct(
        private VendorRepository $vendorRepository,
        private CategoryRepository $categoryRepository,
    ) {
    }

    public function index(Requests\IndexRequest $request): View
    {
        return view('vendors.index', [
            'categories' => $this->categoryRepository->getAll(),
            'vendors' => $this->vendorRepository->getByLimit(),
        ]);
    }

    public function show(Requests\ShowRequest $request, Vendor $vendor): View
    {
        return view('vendors.show', [
            'categories' => $this->categoryRepository->getAll(),
            'vendor' => $vendor,
        ]);
    }
}