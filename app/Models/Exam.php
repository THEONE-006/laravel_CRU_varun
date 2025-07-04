<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mobno',
        'email',
        'age',
        'gender',
        'hobbies'
    ];
    protected $casts=[
        'hobbies'=>'array'
    ];
}
?>