<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'order_date',
        'due_date',
        'service_type',
        'description',
        'status',
        'total_price',
        'notes',
    ];

    protected $casts = [
        'order_date' => 'date',
        'due_date' => 'date',
        'total_price' => 'decimal:2',
    ];

    /**
     * Service type options
     */
    const SERVICE_TYPES = [
        'repair' => 'Repair',
        'custom' => 'Custom',
        'uniform' => 'Uniform',
        'curtain' => 'Curtain',
        'alteration' => 'Alteration',
    ];

    /**
     * Status options
     */
    const STATUSES = [
        'pending' => 'Pending',
        'in_progress' => 'In Progress',
        'completed' => 'Completed',
        'delivered' => 'Delivered',
    ];

    /**
     * Get the customer that owns this order.
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get all order items for this order.
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Get all payments for this order.
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * Get all fitting sessions for this order.
     */
    public function fittingSessions(): HasMany
    {
        return $this->hasMany(FittingSession::class);
    }

    /**
     * Get measurements associated with this order.
     */
    public function measurements(): HasMany
    {
        return $this->hasMany(Measurement::class);
    }

    /**
     * Calculate total amount paid for this order.
     */
    public function getTotalPaidAttribute()
    {
        return $this->payments()->sum('amount_paid');
    }

    /**
     * Calculate remaining balance for this order.
     */
    public function getRemainingBalanceAttribute()
    {
        return $this->total_price - $this->total_paid;
    }

    /**
     * Check if order is fully paid.
     */
    public function isFullyPaid(): bool
    {
        return $this->remaining_balance <= 0;
    }

    /**
     * Check if order is overdue.
     */
    public function isOverdue(): bool
    {
        return $this->due_date->isPast() && $this->status !== 'delivered';
    }
}
