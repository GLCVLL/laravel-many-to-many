<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'cover_image', 'start_date', 'end_date', 'category', 'technologies', 'project_url', 'github_url', 'client', 'role', 'additional_notes', 'visibility'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
