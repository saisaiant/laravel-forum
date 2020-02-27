<?php

namespace LaravelForum;

use LaravelForum\User;

//use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    public function getRouteKeyName() {
        return 'slug';
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bestReply()
    {
        return $this->belongsTo(Reply::class, 'reply_id');
    }

    public function markAsBestReply(Reply $reply)
    {
        $this->update([
            'reply_id' => $reply->id
        ]);  
    }
}
