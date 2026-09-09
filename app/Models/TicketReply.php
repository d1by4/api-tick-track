<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketReply extends Model
{
    protected $fillable=[
        'ticket_id',
        'user_id',
        'conten',
    ];

    public function ticket(){
        return $this->belongTo(Ticket::class);
    }

    public function user(){
        return $this->belongTo(User::class);
    }
}
