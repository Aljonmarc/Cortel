<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
       'phone',
        'address',
      'speciality',
       'room',
     'image'
    ];




    protected $table = 'doctor';

    protected $primaryKey= 'id';
}
