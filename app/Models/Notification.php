<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_id',
        'notification'
    ];

    public function member()
    {
        return $this->belongsTo(User::class);
    }
}
