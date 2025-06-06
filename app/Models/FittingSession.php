<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FittingSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'session_date',
        'feedback',
        'adjustments_needed',
        'is_final_fitting',
    ];

    protected $casts = [
        'session_date' => 'date',
        'is_final_fitting' => 'boolean',
    ];

    /**
     * Get the order that owns this fitting session.
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Check if adjustments are needed.
     */
    public function needsAdjustments(): bool
    {
        return !empty($this->adjustments_needed);
    }

    /**
     * Scope to get only final fittings.
     */
    public function scopeFinalFittings($query)
    {
        return $query->where('is_final_fitting', true);
    }

    /**
     * Scope to get only preliminary fittings.
     */
    public function scopePreliminaryFittings($query)
    {
        return $query->where('is_final_fitting', false);
    }
}
