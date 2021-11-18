<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public const STATUS_CREATED = 0;
    public const STATUS_CONFIRMED = 1;
    public const STATUS_COMPLETED = 2;
    public const STATUS_CANCELED = 3;
    public const STATUS_RETURNED = 4;

    public static array $statuses = [
        self::STATUS_CREATED => 'Created',
        self::STATUS_CONFIRMED => 'Confirmed',
        self::STATUS_COMPLETED => 'Completed',
        self::STATUS_CANCELED => 'Canceled',
        self::STATUS_RETURNED => 'Returned',
    ];

    public function getStatus()
    {
        return (array_key_exists($this->status, self::$statuses)) ? self::$statuses[$this->status] : '---';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function token()
    {
        return $this->belongsTo(Token::class);
    }
}
