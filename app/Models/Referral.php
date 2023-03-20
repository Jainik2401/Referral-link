<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;
    protected $table = 'referral';
    protected $fillable = [
        'referral_code',
        'user_id',
        'parent_user_id',
    ];
}
