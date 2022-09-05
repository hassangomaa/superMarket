<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    public $timestamps = true ;
    protected $fillable =[
        //'id',
        'name', 'price' ,
        'mini','max',
        'timeaverage','details',

    ];
    public function serviceorder(): BelongsTo
    {
        return $this->hasMany(ServiceOrder::class);
    }

}
