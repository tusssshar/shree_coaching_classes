<?php

namespace App\Http\Repository;

use App\Http\Contract\ConfigurationInterface;
use App\Models\Board;
use App\Models\Medium;
use App\Models\ModeOfPayment;
use App\Models\Standard;
use App\Models\TypeOfPayment;

class ConfigurationRepository implements ConfigurationInterface
{
    public function list($type)
    {
        return match ($type) {
            'standard' => Standard::all(),
            'board' => Board::all(),
            'medium' => Medium::all(),
            'typeofpayment' => TypeOfPayment::all(),
            'modeofpayment' => ModeOfPayment::all(),
            default => []
        };
    }

    public function allConfig()
    {
        return [
            'standards'      => Standard::where('status', 1)->get(),
            'boards'         => Board::where('status', 1)->get(),
            'mediums'        => Medium::where('status', 1)->get(),
            'typeOfPayments' => TypeOfPayment::where('status', 1)->get(),
            'modeOfPayments' => ModeOfPayment::where('status', 1)->get(),
        ];
    }
}
