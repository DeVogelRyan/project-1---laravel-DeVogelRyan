<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function reply()
    {
        return $this->hasMany(ContactComment::class);
    }
}
