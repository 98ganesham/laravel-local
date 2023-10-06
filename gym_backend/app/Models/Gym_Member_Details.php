<?php

namespace App\Models;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym_Member_Details extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_ship_name',
        'member_ship_end_date',


    ];
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}