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
 * @property Orders $order
 * @property Product $product
 * @property Status $status
 */

class Order_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'product_name',
    ];
    protected $guarded = [
        'Total',
        'order_id',
        'product_id',
        'status_id'
    ];
    public function status() {
        return $this->belongsTo(Status::class);
    }
    public function product() {
        return $this->belongsTo(Product::class);
    }
    public function order() {
        return $this->belongsTo(Orders::class);
    }

}











