<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{

    public $timestamps = false;

    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function users(){
        return $this->hasMany(UserConversation::class);
    }
}
