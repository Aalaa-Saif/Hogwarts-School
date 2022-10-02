<?php

namespace App\Models;

use App\Models\uniform;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class uniformimg extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'uniform_id',
        'photo',
        'created_at',
        'updated_at'
    ];

    public function uni()
    {
        return $this->belongsTo('App\Models\uniform');
    }

}
