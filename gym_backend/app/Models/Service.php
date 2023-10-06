<?php

namespace App\Models;

use App\Models\Trainner;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_name',
        'service_status',
        'servicee_price',

    ];
    public function trainners()
    {
        return $this->hasMany(Trainner::class);

    }
}