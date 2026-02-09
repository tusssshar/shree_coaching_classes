<?php

namespace App\Traits;

trait HasStatusLabel
{
    public function getStatusLabelAttribute(): string
    {
        return $this->status == 1 ? 'Active' : 'Inactive';
    }

    // Next action label (what button/badge should show)
    public function getStatusActionLabelAttribute(): string
    {
        return $this->status == 1 ? 'Inactive' : 'Active';
    }

    // Badge class for NEXT action
    public function getStatusActionBadgeClassAttribute(): string
    {
        return $this->status == 1
            ? 'badge text-bg-danger'   // clicking will inactivate
            : 'badge text-bg-success'; // clicking will activate
    }
}
