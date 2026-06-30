<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $fillable = [
        'user_id', 'plan_id', 'amount', 'roi_amount',
        'status', 'started_at', 'ends_at',
    ];

    protected function casts(): array
    {
        return [
            'amount'     => 'decimal:2',
            'roi_amount' => 'decimal:2',
            'started_at' => 'datetime',
            'ends_at'    => 'datetime',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(InvestmentPlan::class, 'plan_id');
    }
}
