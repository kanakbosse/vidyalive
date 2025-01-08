<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Exam extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "exams";

    protected $fillable = [
        "title",
        "slug",
        "category_id",
        "Exam_Date",
        "Exam_Level",
        "image",
        "Participating_college",
        "content",
        "status",
    ];

    protected $casts = [
        "status" => "boolean",
    ];
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
