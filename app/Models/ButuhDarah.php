<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ButuhDarah extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilters(Builder $query, array $filters)
    {
        $query->when(
            $filters['goldar'] ?? null,
            fn (Builder $query, $goldar) =>
            $query->where('golongan_darah', $goldar)
        );

        $query->when(
            $filters['gender'] ?? null,
            fn (Builder $query, $gender) =>
            $query->where('gender', $gender)
        );

        $query->when($filters['q'] ?? null, function (Builder $query, $search) {
            $query
                ->where('subject', 'LIKE', "%" . $search . "%")
                ->orWhere('alamat', 'LIKE', "%" . $search . "%")
                ->orWhere('jumlah_darah', 'LIKE', "%" . $search . "%")
                ->orWhere('no_telp', 'LIKE', "%" . $search . "%");
        });
    }
}
