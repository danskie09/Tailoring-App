<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Measurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'order_id',
        'measurement_date',
        'neck',
        'shoulder',
        'chest',
        'waist',
        'hip',
        'sleeve_length',
        'inseam',
        'outseam',
        'thigh',
        'ankle',
        'back_length',
        'notes',
    ];

    protected $casts = [
        'measurement_date' => 'date',
        'neck' => 'decimal:2',
        'shoulder' => 'decimal:2',
        'chest' => 'decimal:2',
        'waist' => 'decimal:2',
        'hip' => 'decimal:2',
        'sleeve_length' => 'decimal:2',
        'inseam' => 'decimal:2',
        'outseam' => 'decimal:2',
        'thigh' => 'decimal:2',
        'ankle' => 'decimal:2',
        'back_length' => 'decimal:2',
    ];

    /**
     * Get the customer that owns this measurement.
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get the order associated with this measurement (optional).
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Get all measurement fields as an array.
     */
    public function getMeasurementFields(): array
    {
        return [
            'neck' => $this->neck,
            'shoulder' => $this->shoulder,
            'chest' => $this->chest,
            'waist' => $this->waist,
            'hip' => $this->hip,
            'sleeve_length' => $this->sleeve_length,
            'inseam' => $this->inseam,
            'outseam' => $this->outseam,
            'thigh' => $this->thigh,
            'ankle' => $this->ankle,
            'back_length' => $this->back_length,
        ];
    }

    /**
     * Check if measurements are complete (at least some basic measurements).
     */
    public function isComplete(): bool
    {
        return $this->chest && $this->waist && $this->hip;
    }
}
