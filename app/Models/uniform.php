<?php

namespace App\Models;

use App\Models\uniformimg;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class uniform extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = "uniforms";

    protected $fillable = [
        'description',
        'type',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [

    ];

    public function images(){
        return $this->hasMany('App\Models\uniformimg');
    }

}
