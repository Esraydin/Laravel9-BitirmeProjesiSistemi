<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    #one to many
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    #one to many ıvers
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    #one to many
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');

    }


}
