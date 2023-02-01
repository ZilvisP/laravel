<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $first_name
 * @property string $second_name
 * @property string $email_address
 * @property string $phone_number
 * @property int $address_id
 * @property int $user_id
 */

class People extends Model
{
    use HasFactory;
}
