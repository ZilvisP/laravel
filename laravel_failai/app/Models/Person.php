<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

/**
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $personal_code
 * @property string $email_address
 * @property string $phone_number
 * @property int $address_id
 * @property int $user_id
 * @property Address $addresses
 * @property User $user
 */
class Person extends Model
{
public $timestamps = false;

    protected $table = 'persons';
    protected $fillable = [
        'first_name',
        'last_name',
        'personal_code',
        'email_address',
        'phone_number',
        'address_id',
        'user_id'
    ];

    public function addresses() {
        return $this->belongsTo(Address::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function __toString(): string
    {
        return $this->name . ' ' . $this->surname;
    }
}
