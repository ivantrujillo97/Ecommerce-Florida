<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Combo;

class ComboType extends Model
{
    protected $fillable = ['combo_type_name'];
    protected $primaryKey = 'combo_type_id';
    public $timestamps = ['created_at', 'updated_at'];

    public function combos()
    {
    	return $this->hasMany(Combo::class, 'combo_type_id');
    }

}
