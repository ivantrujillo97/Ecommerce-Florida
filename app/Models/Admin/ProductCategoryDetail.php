<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryDetail extends Model
{
	protected $table = "product_category_details";
   	protected $fillable = ['product_category_id', 'product_id'];
    protected $primaryKey = 'product_category_details_id';
}
