<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidTest extends Model
{   
    use HasFactory;
    public $timestamps = false;

    protected $attributes = [
        'testerName' => NULL,
        'status' => NULL,
        'result' => NULL,
    ];

    protected $fillable = [
        'name',
        'email',
        'testCenter',
        'testType',
        'date',
        'symptoms',
        ''
    ];
}