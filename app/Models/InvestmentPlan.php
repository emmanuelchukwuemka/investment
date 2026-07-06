<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestmentPlan extends Model
{
    protected $fillable = [
        'name', 'description', 'min_amount', 'max_amount',
        'roi_percent', 'duration_days', 'icon', 'is_active',
    ];

    protected function casts(): array
    {
        return [
            'min_amount'  => 'decimal:2',
            'max_amount'  => 'decimal:2',
            'roi_percent' => 'decimal:2',
            'is_active'   => 'boolean',
        ];
    }

    public function investments()
    {
        return $this->hasMany(Investment::class, 'plan_id');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
