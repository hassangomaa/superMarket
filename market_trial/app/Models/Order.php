<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    public $timestamps = true ;
    protected $fillable =[
       //'id',
        'name', 'details' , 'link','quantity'

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
    }



}
