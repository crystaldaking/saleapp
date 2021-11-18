<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','short_name','price','start_date','end_date','hold_period'
    ];

    protected $dates = [
        'start_date', 'end_date','hold_period'
    ];
}
