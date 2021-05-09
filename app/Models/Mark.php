<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'marks';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
