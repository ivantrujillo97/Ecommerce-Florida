<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\Facades\image;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\ProductCategory;
use App\Models\Admin\Combo;



class Product extends Model
{
    protected $fillable = ['product_name', 'product_price', 'product_trademark', 'product_net_content', 'product_image_name', 'product_colors', 'product_flavors', 'product_recipes', 'product_customization', 'product_state'];
    protected $primaryKey = 'product_id';

    public function productCategory()
    {
        return $this->belongsToMany(ProductCategory::class, 'Product_category_details', 'product_id', 'product_category_id');
    }

    public function combos()
    {
        return $this->belongsToMany(Combo::class, 'combo_products', 'product_id', 'combo_id' );
    }

    public static function setImage($product_image, $actual = false)
    {
        if ($product_image) {
            if ($actual) {
                Storage::disk('dropbox')->getDriver()->getAdapter()->getClient()->delete("images/products/".$actual);
            }
            $imageName = Str::random(20) . '.jpg';

            $imagen = Image::make($product_image)->encode('jpg', 75);
            // $imagen->resize(65, 65, function ($constraint) {
            //     $constraint->upsize();
            // });

            Storage::disk('dropbox')->put("images/products/$imageName", $imagen->stream());
            $dropbox = Storage::disk('dropbox')->getDriver()->getAdapter()->getClient();
            $response = $dropbox->createSharedLinkWithSettings("images/products/$imageName", ["requested_visibility"=>"public"]);
            return str_replace('dl=0', 'raw=1', $response['url']);
        } else {
            return false;
        } 
    }
}
