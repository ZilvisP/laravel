<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/** @property int $id
 * @property string $countrie
 * @property string $city
 * @property string $street
 * @property string $post_code
 */

class Addresses extends Model
{
    use HasFactory;
}
