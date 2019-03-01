<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = ['name', 'firstName', 'mail', 'birth', 'gender', 'pwd', 'phone', 'pseudo', 'shipping_address', 'invoice_address'];
}
