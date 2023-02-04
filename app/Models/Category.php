<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'store_id',
    ];

    public function store() {
        return $this->belongsTo(Store::Class);
    }

    public function products() {
        return $this->hasMany(Product::Class);
    }
}
