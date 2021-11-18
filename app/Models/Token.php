<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','short_name','price','start_date','end_date','hold_period','image_path'
    ];

    protected $dates = [
        'start_date', 'end_date','hold_period'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
