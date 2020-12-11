<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banner';
    protected $fillable = ['banner_name', 'photo', 'created_by'];

    public function user() {
        return $this->hasMany('App\Models\User', 'id', 'created_by');
    }
}

