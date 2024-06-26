<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
