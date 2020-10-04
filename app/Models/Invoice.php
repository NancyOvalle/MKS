<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table="invoice";
    protected $fillable= ['purchase_date', 'purchase_value','products_id','payments_types_id','users_id'];
}
