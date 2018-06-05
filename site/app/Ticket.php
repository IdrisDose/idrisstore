<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'name', 'author', 'content', 'status', 'hidden'
    ];

    public function author(){
        return $this->belongsToMany(User::class);
    }
}
