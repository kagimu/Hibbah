<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Artist extends Model
{
    use HasFactory;
    protected $fillable=[
        'real_name',
        'stage_name',
        'gender',
        'Country',
        'District',
        'search_tags',
        'cover',
        'Biography',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
