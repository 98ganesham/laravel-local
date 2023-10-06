<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_email',
        'user_phone',
        'rating',
        'description',
        'suggestions',

    ];
    public function users()
    {
        return $this->hasMany(User::class);

    }
}