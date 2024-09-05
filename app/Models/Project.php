<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'github_url'];

    public function images()
    {
        return $this->belongsToMany(Image::class, 'project_image');
    }
}
