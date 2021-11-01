<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['column', 'position', 'title', 'content', 'color'];
    public function links()
    {
        return $this->belongsToMany(Badge::class);
    }
}
