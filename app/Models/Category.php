<?php

namespace App\Models;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "categories";

    protected $fillable = [
        "title",
        "slug",
        "duration",
        "college",
        "sort_description",
        "description",
        "image",
        "status",
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function posts() {
        return $this->hasMany(Post::class);
    }
    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
    }
 
}
