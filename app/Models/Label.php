<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function article()
    {
        return $this->hasMany(ArticleLabel::class,'label_id');
    }

    public function application()
    {
        return $this->hasMany(ApplicationLabel::class,'label_id');
    }
}
