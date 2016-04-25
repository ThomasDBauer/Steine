<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserConversation extends Model
{
    protected $fillable = [
      'user_id', 'conversation_id'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
