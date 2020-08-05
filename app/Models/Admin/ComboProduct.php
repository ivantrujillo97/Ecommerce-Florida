<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ComboProduct extends Model
{
	protected $table = "combo_products";
   	protected $fillable = ['combo_id', 'product_id', 'base_id', 'units'];
    protected $primaryKey = 'combo_product_id';
}
