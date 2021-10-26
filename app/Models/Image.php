<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;

class Image extends Model
{
    use HasFactory;
protected $fillable=[
    'image',
    'artist_id',
];

 public function artists(){
    return $this->belongsTo(Artist::class);
}

}
