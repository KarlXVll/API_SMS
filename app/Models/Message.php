<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'sender_id',
        'message',
        'partner_link_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function sender()
    {
        return $this->hasOne(Sender::class);
    }

    public function partnerLinks()
    {
        return $this->belongsToMany(PartnerLink::class, 'clicks');
    }
}
