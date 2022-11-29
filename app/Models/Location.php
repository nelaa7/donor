<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilters(Builder $query, array $filters)
    {
        $query->when($filters['q'] ?? null, function (Builder $query, $search) {
            $query
                ->where('nama_lokasi', 'LIKE', "%" . $search . "%")
                ->orWhere('alamat', 'LIKE', "%" . $search . "%");
        });
    }
}
