<?php

namespace App\Models;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function faq()
    {
        return $this->belongsToMany(Faq::class);
    }
}
