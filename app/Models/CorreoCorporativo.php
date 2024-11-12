<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorreoCorporativo extends Model
{
    use HasFactory;
    protected $table = 'correo_corporativo';
    protected $fillable = [
        'emailCorporativo',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
