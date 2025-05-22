<?php

namespace App\Repositories;

use App\Models\Vendor;
use Illuminate\Database\Eloquent\Collection;

class VendorRepository
{
    public function getByLimit(int $limit = 20): Collection
    {
        return Vendor::limit($limit)
            ->with('category')
            ->get();
    }

    public function getByCategory(int $categoryId, int $limit = 20): Collection
    {
        return Vendor::where('category_id', $categoryId)
            ->with('category')
            ->limit($limit)
            ->get();
    }

    public function getBySlug(string $slug): ?Vendor
    {
        return Vendor::where('slug', $slug)->first();
    }
}