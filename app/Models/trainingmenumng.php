<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainingmenumng extends Model
{
    use HasFactory;
    
        protected $fillable = [
        'userid', 'menuid', 'date','cmpflg'
    ];
}
