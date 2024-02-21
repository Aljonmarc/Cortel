<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
       'phone',
      'doctor',
       'date',
     'message',
     'user_id',
     'status'
    ];

   



    protected $table = 'appointment';

    protected $primaryKey= 'id';
}
