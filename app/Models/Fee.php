<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'fees';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}