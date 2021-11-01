<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Link extends Pivot
{
    use HasFactory;
    protected $fillable = ['title_id', 'badge_id'];
}
