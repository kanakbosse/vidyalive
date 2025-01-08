<?php

namespace App\Models;

use App\Models\Unipage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tabs extends Model
{
    use HasFactory;

    protected $table = "tabs";

    protected $fillable = [
       "name",
        "content",
       
    ];
    public function unipage()
{
    return $this->belongsTo(Unipage::class);
}
}
