<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $image
 * @property int $category_id
 * @property string $color
 * @property string $size
 * @property string $price
 * @property int $status_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Category $category
 * @property Status $statuses
 */
class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'category_id',
        'color',
        'size',
        'price',
        'status_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function __toString(): string
    {
        return $this->name;
    }
}
