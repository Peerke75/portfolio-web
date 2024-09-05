<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['file_path', 'alt_text'];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_image');
    }
}
