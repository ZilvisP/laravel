<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property string $name
 * @property string $amount
 * @property int $status_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Status $statuses
 */
class Payment extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'amount'
    ];
    protected $guarded = [
        'status_id'
    ];
    public function status() {
        return $this->belongsTo(Status::class);
    }
}
