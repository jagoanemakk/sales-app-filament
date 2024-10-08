<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Orders extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'salesman_id',
        'customer_id',
        'order_date',
        'amount'
    ];


    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customers::class);
    }

    public function salesman(): BelongsTo
    {
        return $this->belongsTo(Salesman::class);
    }
}
