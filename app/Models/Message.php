<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'email', 'phone', 'message', 'status', 'is_read' ,'pais',     'ciudad'];

    public function answers () {
        return $this->hasMany(MailingAnswer::class, 'mailing_id', 'id');
    }
}
