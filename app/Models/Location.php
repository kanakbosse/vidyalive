<?php

namespace App\Models;

// use App\Models\Tag;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory, SoftDeletes ;
    protected $table = "location";

    protected $fillable = [
        "title",
        "image",
        "slug",
        "category_id",
        "content",
        "status",
    ];
    protected $casts = [
        "status" => "boolean",
    ];
    // public function tags() {
    //     return $this->belongsToMany(Tag::class);
    // }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    
}
