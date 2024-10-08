<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Salesman extends Model
{
    use HasFactory;

    protected $table = 'salesman';

    protected $fillable =
    [
        'salesman_name',
        'salesman_city',
        'commissions',
    ];

    public function order(): HasMany
    {
        return $this->hasMany(Orders::class);
    }
}
