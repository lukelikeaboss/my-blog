<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

public function post(){

    return $this->belongsTo('App\Models\Post');
}
public function scopeUnverified($query){
    return $query->where('status', 'unverified');
}
public function scopeFiveStar($query){
return $query->where('rating', 4);
}

}