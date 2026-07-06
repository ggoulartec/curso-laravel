<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HabitLog extends Model
{
    protected $fillable = [
        'user_id',
        'habit_id', 
        'completed_at'
    ];

    // Um log pertence a um usuário
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Um log pertence a um habito
    public function habit(): BelongsTo
    {
        return $this->belongsTo(Habit::class);
    }
}
