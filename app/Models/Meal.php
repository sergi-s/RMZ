<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function chef()
    {
        return $this->belongsTo("App\Models\User", "chef_id", "id");
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function ordered_by()
    {
        return $this->belongsToMany(User::class, "orders");
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
