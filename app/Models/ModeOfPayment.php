<?php

namespace App\Models;

use App\Traits\HasCommonName;
use App\Traits\HasStatusLabel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ModeOfPayment extends Model
{
    use HasCommonName;
    use HasStatusLabel;

    protected $table = 'v1_scc_mode_of_payments';

    protected $fillable = ['payment_mode'];

    protected string $nameColumn = 'payment_mode';

    protected $appends = ['name', 'status_label', 'status_action_label', 'status_action_badge_class'];

    protected $hidden = [
        'payment_mode',
        'uuid',
        'order_by',
        'created_at',
        'updated_at',
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

    public function setNameAttribute($value): void
    {
        $this->attributes[$this->nameColumn] = $value;
    }
}
