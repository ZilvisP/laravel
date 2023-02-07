<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $shipping_address_id
 * @property int $billing_address_id
 * @property int $status_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Address $addresses
 * @property User $user
 * @property Status $status
 */
class Orders extends Model
{
    use HasFactory;

    protected $guarded = [
        'status_id',
        'shipping_address_id',
        'billing_address_id',
        'user_id'
    ];
    public function status() {
        return $this->belongsTo(Status::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
public function addresses() {
        return $this->belongsTo(Addresses::class);
}
}
