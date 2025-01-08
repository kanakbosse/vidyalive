<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unibanner extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "unibanner";

    protected $fillable = [
        "title",
        "slug",       
        "image",
        "status",
    ];
    protected $casts = [
        'status' => 'boolean',
    ];
}
