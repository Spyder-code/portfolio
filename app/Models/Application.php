<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'image',
        'link',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function label()
    {
        return $this->hasMany(ApplicationLabel::class,'application_id');
    }
}
