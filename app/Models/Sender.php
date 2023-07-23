<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number'
    ];

    public function messages()
    {
        return $this->belongsTo(Message::class);
    }
}
