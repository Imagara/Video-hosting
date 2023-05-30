<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','user_id','views',
    ];
   public function video() {
       return $this->hasOne(Video::class, 'id', 'user_id');
   }
}
