<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationLabel extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'label_id',
    ];

    public function label()
    {
        return $this->belongsTo(Label::class);
    }
}
