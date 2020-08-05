<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Product;

class ProductCategory extends Model
{
    protected $fillable = ['product_category_name'];
    protected $primaryKey = 'product_category_id';
    public $timestamps = ['created_at', 'updated_at'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'Product_category_details', 'product_category_id', 'product_id' );
    }

}
