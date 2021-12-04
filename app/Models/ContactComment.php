<?php

namespace App\Models;


use App\Models\Contact;
use App\Models\ContactComment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactReply extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public function contact() {
        return $this->belongsTo(Contact::class);
    }

}
