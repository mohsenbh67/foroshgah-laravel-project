<?php

namespace App\Models\Notify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Email extends Model
{
    protected $table = 'public_mail';

    use HasFactory, SoftDeletes;

    protected $fillable = ['subject', 'status', 'body', 'published_at'];
}