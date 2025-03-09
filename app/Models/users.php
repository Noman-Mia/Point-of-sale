<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable =[
        'firsName',
        'lastName',
        'email',
        'mobile',
        'password',
        'otp'
    ];
    protected $attributes =[
        'otp'=> '0'
    ];
}
