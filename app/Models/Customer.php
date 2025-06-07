<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Builder;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'email',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get all orders for this customer.
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    /**
     * Get all measurements for this customer.
     */
    public function measurements(): HasMany
    {
        return $this->hasMany(Measurement::class);
    }

    /**
     * Get all payments for this customer through orders.
     */
    public function payments()
    {
        return $this->hasManyThrough(Payment::class, Order::class);
    }

    /**
     * Get all fitting sessions for this customer.
     */
    public function fittingSessions(): HasMany
    {
        return $this->hasMany(FittingSession::class);
    }

    /**
     * Get the customer's latest measurements.
     */
    public function latestMeasurements()
    {
        return $this->measurements()->latest('measurement_date')->first();
    }

    /**
     * Get total spent by customer.
     */
    public function getTotalSpentAttribute()
    {
        return $this->orders()->sum('total_price') ?: 0;
    }

    /**
     * Get customer's order count.
     */
    public function getOrderCountAttribute()
    {
        return $this->orders()->count();
    }

    /**
     * Get customer's pending orders count.
     */
    public function getPendingOrdersCountAttribute()
    {
        return $this->orders()->where('status', 'pending')->count();
    }

    /**
     * Scope to search customers by name, phone, or email.
     */
    public function scopeSearch(Builder $query, string $search): Builder
    {
        return $query->where(function (Builder $query) use ($search) {
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('phone', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('address', 'LIKE', "%{$search}%");
        });
    }

    /**
     * Get formatted phone number.
     */
    public function getFormattedPhoneAttribute()
    {
        return $this->phone;
    }

    /**
     * Get customer's initials for avatar.
     */
    public function getInitialsAttribute()
    {
        $words = explode(' ', $this->name);
        if (count($words) >= 2) {
            return strtoupper(substr($words[0], 0, 1) . substr($words[1], 0, 1));
        }
        return strtoupper(substr($this->name, 0, 2));
    }
}
