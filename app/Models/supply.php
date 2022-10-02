<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;

class supply extends Model
{
    use HasFactory;

    protected $table = "supplys";

    protected $fillable = [
        'name',
        'description',
        'type',
        'photo',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [

    ];

}
