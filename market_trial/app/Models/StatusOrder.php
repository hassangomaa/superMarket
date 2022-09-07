<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusOrder extends Model
{
    use HasFactory;
    protected $table = 'status_orders';
    public $timestamps = true ;
    protected $fillable =[
        //'id',
        'name',
    ];
    public function order(): BelongsTo
    {
        return $this->hasMany(Order::class);
    }
}
