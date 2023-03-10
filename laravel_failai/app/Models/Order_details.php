<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $order_id
 * @property string $product_name
 * @property int $product_id
 * @property int $quantity
 * @property int $Total
 * @property int $status_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Order $orders
 * @property Product $product
 * @property Status $statuses
 */

class Order_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_name',
        'product_id',
        'quantity',
        'price',
        'Total',
    ];
    protected $guarded = [
        'status_id'

    ];
    public function status() {
        return $this->belongsTo(Status::class);
    }
    public function product() {
        return $this->belongsTo(Product::class);
    }
    public function order() {
        return $this->belongsTo(Order::class);
    }
    public function __toString(): string
    {
        return $this->product_name;
    }
}











