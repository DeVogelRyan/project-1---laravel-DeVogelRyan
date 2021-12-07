<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'file'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
