<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $image
 * @property int $status_id
 * @property Status $status
 * @property int $parent_id
 * @property string $sort_order
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'image',
        'description',
    ];
    protected $guarded = [
        'status_id',
        'sort_order',
        'parent_id'
    ];
    public function status() {
        return $this->belongsTo(Status::class);
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
