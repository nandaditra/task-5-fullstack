<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'posts';

    public function post()
    {
        return $this->hasMany(Category::class);
    }
}
