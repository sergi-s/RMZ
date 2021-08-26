<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = ['chef_id', "user_id"];
    /**
     * Relationship: Users
     *
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
