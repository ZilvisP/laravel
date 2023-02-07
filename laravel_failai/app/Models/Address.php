<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/** @property int $id
 * @property string $country
 * @property string $city
 * @property string $street
 * @property string $post_code
 */
class Address extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'country',
        'city',
        'street',
        'post_code',
    ];
    protected $guarded = [
    ];

}
