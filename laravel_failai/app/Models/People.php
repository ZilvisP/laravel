<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $first_name
 * @property string $second_name
 * @property string $personal_code
 * @property string $email_address
 * @property string $phone_number
 * @property int $address_id
 * @property int $user_id
 * @property Addresses $addresses
 * @property User $user
 */
class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'second_name',
        'personal_code',
        'email_address',
        'phone_number',

    ];
    protected $guarded = [
        'address_id',
        'user_id'
    ];
    public function addresses() {
        return $this->belongsTo(Addresses::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }

}
