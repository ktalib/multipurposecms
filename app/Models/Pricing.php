<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','book_cover', 'slug', 'price', 'old_price', 'duration', 'description', 'status',
    ];
}
