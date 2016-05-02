<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'user_id', 'status'
    ];

    protected $hidden = [
        'updated_at'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function offers(){
        return $this->hasOne(Offer::class);
    }

    public function demands(){
        return $this->hasOne(Demand::class);
    }

    public function tags(){
        return $this->hasMany(TagPost::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}