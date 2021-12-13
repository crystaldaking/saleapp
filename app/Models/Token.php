<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Token
 *
 * @property int $id
 * @property string $name
 * @property string $short_name
 * @property string $price
 * @property \Illuminate\Support\Carbon $start_date
 * @property \Illuminate\Support\Carbon $end_date
 * @property \Illuminate\Support\Carbon $hold_period
 * @property string $image_path
 * @property string|null $view_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @method static \Illuminate\Database\Eloquent\Builder|Token newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Token newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Token query()
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereHoldPeriod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereViewUrl($value)
 * @mixin \Eloquent
 */
class Token extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','short_name','price','start_date','end_date','hold_period','image_path','view_url','description'
    ];

    protected $dates = [
        'start_date', 'end_date','hold_period'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
