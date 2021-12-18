<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationFitur extends Model
{
    use HasFactory;
    protected $fillable = [
        'application_id',
        'name',
    ];

    public function label()
    {
        return $this->belongsTo(Application::class);
    }
}
