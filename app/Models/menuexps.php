<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menuexps extends Model
{
    use HasFactory;
                protected $fillable = [
        'userid', 'menuid', 'weight','times', 'set'
    ];
}
