<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Customer;


class Suggestion extends Model
{
    protected $fillable = ['message', 'user_id'];
    protected $primaryKey = 'suggestion_id';

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
