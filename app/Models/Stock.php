<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilters(Builder $query, array $filters)
    {
        $query->when($filters['q'] ?? null, function (Builder $query, $search) {
            $query
                ->where('jenis_transfusi', 'LIKE', "%" . $search . "%")
                ->orWhere('golongan_darah', 'LIKE', "%" . $search . "%")
                ->orWhere('jumlah_stok', 'LIKE', "%" . $search . "%");
        });
    }
}
