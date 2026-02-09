<?php

namespace App\Models;

use App\Traits\HasCommonName;
use App\Traits\HasStatusLabel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Standard extends Model
{
    use HasCommonName;
    use HasStatusLabel;

    protected $table = 'v1_scc_standards';

    protected $fillable = ['std_name'];

    protected string $nameColumn = 'std_name';

    protected $appends = ['name', 'status_label', 'status_action_label', 'status_action_badge_class'];

    protected $hidden = [
        'std_name',
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
