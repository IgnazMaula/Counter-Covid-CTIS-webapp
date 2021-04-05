<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestKit extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'center_id',
        'rapidStock',
        'swabStock',
        'pcrStock',
    ];
}