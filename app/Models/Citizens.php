<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizens extends Model
{
    use HasFactory;
    protected  $table = 'citizens';

    protected $fillable = [
        'name', 'gender', 'address', 'phone', 'ward_id'
    ];

   
}
