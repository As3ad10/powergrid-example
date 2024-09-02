<?php

namespace App\Models;

use Illuminate\Support\Number;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;

    public $fillable = ['amount'];

     /**
     * Interact with the amount attribute.
     *
     * return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function amount(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Number::format((float) $value),
        );
    }
}
