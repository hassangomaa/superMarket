<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminOrder extends Model
{
    use HasFactory;
    protected $table = 'admin_orders';
    public $timestamps = true ;
    protected $fillable =[
        //'id',
        'name',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userorder(): BelongsTo
    {
        return $this->hasMany(UserOrder::class);//change to belongs to
    }

    public function serviceorder(): BelongsTo
    {
        return $this->hasMany(ServiceOrder::class);
    }}
