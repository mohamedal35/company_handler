<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'products_categories';
    public function category_data() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
