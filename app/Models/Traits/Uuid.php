<?php

namespace App\Models\Traits;

use Ramsey\Uuid\Uuid as Ramseyuuid;

trait Uuid 
{
    public static function boot()
    {
        parent::boot();
        static::creating(function ($object) {
            $object->id = Ramseyuuid::uuid4()->toString();
        });
    }
}