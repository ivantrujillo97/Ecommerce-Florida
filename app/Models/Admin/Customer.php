<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['customer_name', 'customer_email', 'customer_phone', 'customer_home_address',];
    protected $primaryKey = 'customer_id';
}
