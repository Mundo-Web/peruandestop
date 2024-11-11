<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailingAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'mailing_id',
        'subject',
        'content'
    ];
}
