<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function get_products() {
        return $this->with('product_cats', 'product_cats.category_data')->get();
    }
    public function product_cats() {
        return $this->hasMany(ProductCategory::class, 'product_id', 'id');
    }
    public function get_total_products() {
        return $this->selectRaw('COUNT(*) as stats')->first();
    }
    public function latest_products() {
        return $this->selectRaw('*')->orderBy('created_at', 'DESC')->limit(8)->get();
    }
}
