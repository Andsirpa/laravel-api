<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    protected $fillable = [
        'title',
        'author',
        'description',
        'project_link',
        'type_id'
    ];

    public function technology()
    {
        return $this->belongsToMany(Technology::class);
    }
}

