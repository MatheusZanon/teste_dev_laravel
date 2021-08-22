<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalTokens extends Model
{
    use HasFactory;

    protected $table = 'personal_access_tokens';

    protected $fillable = ['tokenable_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
