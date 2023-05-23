<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','status'];

    public function blogs()
    {
        return $this->hasMany(Blog::class)->where('status', 1);
    }
}
