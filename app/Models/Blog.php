<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilters(Builder $query, array $filters)
    {
        $query->when(
            $filters['category'] ?? null,
            fn (Builder $query, $category) =>
            $query->where('category', $category)
        );

        $query->when($filters['q'] ?? null, function (Builder $query, $search) {
            $query
                ->where('judul', 'LIKE', "%" . $search . "%")
                ->orWhere('body', 'LIKE', "%" . $search . "%");
        });
    }
}
