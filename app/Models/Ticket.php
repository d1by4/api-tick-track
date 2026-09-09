<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillabel = [
        'user_id',
        'code',
        'title',
        'description',
        'status',
        'priority',
        'completed_at',
    ];

    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function ticketReplies()
    {
        return $this->hasMany(TicketReply::class);
    }
}
