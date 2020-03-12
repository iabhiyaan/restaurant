<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = ['id', 'create_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
