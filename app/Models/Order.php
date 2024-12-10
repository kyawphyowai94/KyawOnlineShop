<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'orders';
    protected $fillable = [
        'vocher_no',
        'total',
        'qty',
        'oayment_slip',
        'status',
        'note',
        'item_id',
        'payment_id',
        'user_id'
    ];
}
