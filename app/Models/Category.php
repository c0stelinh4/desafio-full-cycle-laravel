<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Uuid;

class Category extends Model
{
    use SoftDeletes, Uuid;

    protected $fillable = [
        'name', 'description', 'is_active'
    ];
    protected $casts = [
        'id' => 'string'
    ];
    protected $dates = ['deleted_at'];
}
