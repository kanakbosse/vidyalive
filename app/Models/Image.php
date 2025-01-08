<?php

namespace App\Models;

use App\Models\Unipage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Image extends Model
{
    use HasFactory;

    protected $table = "images";
  
    protected $fillable = ['unipage_id', 
       "image_path",      
       
    ];
    public function unipage()
    {
        return $this->belongsTo(Unipage::class);
    }
}
