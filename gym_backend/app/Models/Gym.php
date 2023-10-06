<?php

namespace App\Models;

use App\Models\Gym_Member_Details;
use App\Models\Service;
use App\Models\Gym_Payments;
use App\Models\Trainer;
use App\Models\User;
use App\Models\FeedBack;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    use HasFactory;
    protected $fillable = [
        'gym_address',
        'gym_class_name',
        'gym_class_time',
    ];
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function gym_member_details()
    {
        return $this->hasMany(Gym_Member_Details::class);
    }
    public function gym_payment()
    {
        return $this->hasMany(Gym_Payments::class);
    }
    public function trainers()
    {
        return $this->hasMany(Trainer::class);

    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function feedback()
    {
        return $this->hasMany(FeedBack::class);
    }

}