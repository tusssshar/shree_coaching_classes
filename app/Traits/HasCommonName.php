<?php

namespace App\Traits;

trait HasCommonName
{
    public function getNameAttribute(): string
    {
        if (! isset($this->nameColumn)) {
            throw new \LogicException(
                'Model '.static::class.' must define $nameColumn'
            );
        }

        return $this->{$this->nameColumn};
    }
}
