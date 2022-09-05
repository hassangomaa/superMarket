<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    use HasFactory;

    protected $table = 'service_orders';
    public $timestamps = true ;
    protected $fillable =[
        'serviceid', 'useid',

    ];



    /**
     * Get all of the student for the Enroll
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function service(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Get all of the course for the Enroll
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }

}
