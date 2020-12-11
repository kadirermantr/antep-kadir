<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $fillable = ['head', 'content', 'thumbnail', 'comment', 'created_at', 'created_by'];

    public function user() {
        return $this->hasMany('App\Models\User', 'id', 'created_by');
    }
}
