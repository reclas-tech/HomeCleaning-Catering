<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class CateringPacket extends Model
{
    use HasFactory, HasUlids, SoftDeletes;

    protected $fillable = [
        'description',
        'author',
        'image',
        'name',
    ];
}
