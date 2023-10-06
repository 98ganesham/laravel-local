<?php

namespace App\Models;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym_Payments extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_type',
        'payment_last_date',
        'end_of_membership_date',
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
}