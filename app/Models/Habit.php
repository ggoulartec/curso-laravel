<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Habit extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 
        'user_id'
    ];

    // Um habito pertence a um usuário
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Um habito pode ter vários logs
    public function habitLogs(): HasMany
    {
        return $this->hasMany(HabitLog::class);
    }
}
