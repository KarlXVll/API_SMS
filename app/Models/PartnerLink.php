<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link'
    ];

    public function messages()
    {
        return $this->belongsToMany(Message::class, 'clicks');
    }
}
